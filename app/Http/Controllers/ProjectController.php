<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Notifications\UserAddedNotification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Collection;
use Spatie\Permission\Traits\HasRoles;

class ProjectController extends Controller
{



    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();
            return $next($request);
        });
    }


    public function index(Request $request)
    {
        $projects = match(true) {
            $this->user->hasRole('Admin') => Project::all(),
            $this->user->hasRole('Manager') => $this->user->tasksCreated,
            $this->user->hasRole('Team Member') => $this->user->projects,
            default => []
        };

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
            DB::transaction(function () use ($validated) {
                $project = Project::create([
                    'name' => $validated['name'],
                    'details' => $validated['details'],
                    'start_date' => $validated['start_date'],
                    'end_date' => $validated['end_date'],
                    'created_by' => $this->user->id,
                ]);

                // إعطاء المستخدم صلاحية الـ Manager إذا لم تكن لديه
                $this->user->assignRole('Manager');
            });

            return response()->json(['success' => 'Project created successfully.']);
        } catch (\Exception $ex) {
            return response()->json(['error' => 'Failed to create project.'], 500);
        }
    }


    public function show($id)
    {
        $project = Project::findOrFail($id);
        $tasks = request()->query('text22')
            ? Task::search(request('text22'))->where('project_id', $project->id)->get()
            : $project->tasks;

        $isCreator = $project->created_by === $this->user->id;
        $isAssigned = $project->users()->wherePivot('status', 'approved')->where('user_id', $this->user->id)->exists();

        if ($isCreator || $isAssigned) {
            $approvedUsers = $project->users()->wherePivot('status', 'approved')->get();
            return view('project-details', compact('project', 'approvedUsers', 'tasks'));
        }

        return redirect()->route('404');
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
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'details' => 'sometimes|required|string',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date|after_or_equal:start_date',
        ]);

        try {
            DB::transaction(function () use ($project, $validated) {
                $project->update($validated);
            });

            return redirect()->back()->with('success', 'Project updated successfully.');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Failed to update project.');
        }
    }


    public function addUser(Request $request, $projectId)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $project = Project::findOrFail($projectId);

        // التحقق من أن المستخدم الحالي هو مالك المشروع
        if ($project->created_by !== $this->user->id) {
            return redirect()->route('404');
        }

        $user = User::where('email', $request->email)->firstOrFail();

        // منع إضافة نفس المستخدم مرة أخرى
        if ($project->users()->where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('info', 'User already exists.');
        }

        $project->users()->attach($user->id, ['status' => 'disapproved']);
        $user->notify(new UserAddedNotification($project));

        return redirect()->back()->with('success', 'User added successfully.');
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
        $project = Project::findOrFail($id);

        if ($project->created_by === $this->user->id) {
            $project->delete();
            return redirect()->route('index')->with('success', 'Project deleted successfully.');
        }

        return redirect()->route('404');
    }





}
