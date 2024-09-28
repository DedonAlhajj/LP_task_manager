<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class ProjectController extends Controller
{
    protected $user;
    protected $taskRepo;


    public function __construct()
    {
        Auth::check();
        $this->user = Auth::user();

    }


    public function index(Request $request)
    {
        $projects = [];
        $u = Auth::user();
        // dd($u->hasRole ('Manager'));
        if ( $u->hasRole('Admin')) {
            $projects = Project::all();
        }elseif ( $u->hasRole ('Manager')){

            $projects = $u->tasksCreated;
        }
        elseif (Auth::user()->hasRole('Team Member')) {
            //عرض المشاريع التي يكون للمستخدم (Auth) مهام موكلة إليه فيها فقط
            $projects = $u->projects;

        }
        //dd($projects);
        return view('projects.my-projects-view', compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        try {
            DB::transaction(function () use ($validated, $request) {
                // إنشاء المشروع
                $project = Project::create([
                    'name' => $validated['name'],
                    'details' => $validated['details'],
                    'start_date' => $validated['start_date'],
                    'end_date' => $validated['end_date'],
                    'created_by' => auth()->id(), // المستخدم الحالي كمنشئ المشروع
                ]);
                // إضافة الصلاحية للمستخدم كـ manager
                $user = auth()->user();
                if (!$user->hasRole('Manager')) {
                    $user->assignRole('Manager');
                }
            });
            DB::commit();
            return response()->json(['success' => 'Project created successfully.']);
            // return redirect()->back()->with('success', 'Project created successfully.');
        } catch (\Exception $ex) {
            DB::rollback();
            return response()->json(['error' => 'Failed to create project.'], 500);
            // return redirect()->back()->with('error', 'Failed to create project.');
        }
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        // الحصول على المستخدم الحالي
        $user = auth()->user();


        // التحقق إذا كان المستخدم هو الذي أنشأ المشروع أو أنه من المستخدمين المرتبطين بالمشروع
        $isCreator = $project->created_by == $user->id;
        $isAssigned = $project->users()
            ->where('user_id', $user->id)
            ->wherePivot('status', 'approved')
            ->exists();

        if ($isCreator || $isAssigned) {
            $approvedUsers = $project->users()->wherePivot('status', 'approved')->get();
            return view('project-details', compact('project','approvedUsers'));
        } else {
            return redirect()->route('404');
        }
    }

    public function edit($id)
    {
        $projects = [];

        $project = Project::findOrFail($id);
        if ($project->created_by ==  auth()->id()){
            return view('projects.edit', compact('project'));
        }
        return redirect()->route('404');


    }

    public function update(Request $request, $id)
    {
        // البحث عن المشروع
        $project = Project::findOrFail($id);

        // التحقق من البيانات المدخلة
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'details' => 'sometimes|required|string',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date|after_or_equal:start_date',
        ]);

        try {
            DB::transaction(function () use ($validated, $request,$project) {
                $project->update($validated);
            });

            DB::commit();
            return redirect()->back()->with('success', 'Project updated successfully.');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'Failed to update project.');
        }

    }

    public function addUser(Request $request, $projectId)
    {

        $user1 = auth()->user();
        // التحقق من صحة المدخلات
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // الحصول على المشروع
        $project = Project::findOrFail($projectId);

        // التأكد من أن المستخدم الحالي هو المدير

        if ($project->created_by == $user1->id) {

            // الحصول على المستخدم عبر البريد الإلكتروني
            $user = User::where('email', $request->email)->firstOrFail();

            // if (!$user) {
            //     session()->flash('error', 'There is no user with this email');
            //     return redirect()->route('projects.addUser', $project->id);
            // }
            // التحقق إذا كان المستخدم مرتبطًا بالفعل بالمشروع
            if ($project->users()->where('user_id', $user->id)->exists()) {
                session()->flash('info', 'user already exists');
                return redirect()->back();
            }
            // إضافة المستخدم إلى المشروع مع تحديد الحالة كـ disapproved
            $project->users()->attach($user->id, ['status' => 'disapproved']);

            session()->flash('success', 'User added success');
            return redirect()->back();
        }
    }

    public function myProjects()
    {
        // الحصول على المستخدم الحالي
        $user = auth()->user();

        // جلب المشاريع المرتبطة بالمستخدم مع معلومات الجدول الوسيط
        $projects = $user->projects()->withPivot('status')->wherePivot('status', 'disapproved')->get();


        return view('projects.invitations', compact('projects'));

    }

    public function acceptInvitations(Request $request)
    {
        // dd($request);
        // الحصول على المستخدم الحالي
        $user = auth()->user();
        $projectId=$request->projectId;
        // البحث عن المشروع الذي يرتبط به المستخدم
        $project = $user->projects()->where('project_id', $projectId)->first();

        // التحقق من وجود المشروع في الجدول الوسيط
        if (!$project) {

            return response()->json(['error' => 'Project not found.'], 404);
            //  return redirect()->back()->with('error', 'error you are not invited.');
        }

        // التحقق من أن الحالة الحالية هي disapproved
        if ($project->pivot->status != 'disapproved') {
            return response()->json(['error' => 'you cant change status.']);

            // return redirect()->back()->with('error', 'you cant change status.');
        }

        // تحديث الحالة إلى approved
        $user->projects()->updateExistingPivot($projectId, ['status' => 'approved']);

        // return redirect()->back()->with('success', 'Invitation Accepted.');
        return response()->json(['success' => 'Invitation Accepted.']);

    }


    public function add_user_to_project($projectId)
    {
        // الحصول على المستخدم الحالي
        return view('invite-colleagues', compact('projectId'));

    }

    

    public function destroy($id) 
    {
        $user=Auth::user();
        $project = Project::find($id);
        if ($project->created_by == $user->id) {
            $project->delete();
            return redirect()->route('index')->with('success', 'Project deleted successfully.');
        }
    }




}
