<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
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

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:pending,in_progress,completed', // مثال على الحالات
        ]);

        try {
            DB::transaction(function () use ($validated, $request) {
                // إنشاء المشروع
                $project = Project::create([
                    'name' => $validated['name'],
                    'details' => $validated['details'],
                    'start_date' => $validated['start_date'],
                    'end_date' => $validated['end_date'],
                    'status' => $validated['status'],
                    'created_by' => auth()->id(), // المستخدم الحالي كمنشئ المشروع
                ]);

                // إضافة الصلاحية للمستخدم كـ manager
                $user = auth()->user();
                if (!$user->hasRole('Manager')) {
                    $user->assignRole('Manager');
                }
            });

            DB::commit();
            return redirect()->route('/')->with('success', 'Project created successfully.');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('/')->with('error', 'Failed to create project.');
        }
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        // الحصول على المستخدم الحالي
        $user = auth()->user();

        // التحقق إذا كان المستخدم هو الذي أنشأ المشروع أو أنه من المستخدمين المرتبطين بالمشروع
        $isCreator = $project->created_by == $user->id;
        $isAssigned = $project->users()->where('user_id', $user->id)->exists();

        if ($isCreator || $isAssigned) {
            return view('project-details', compact('project'));
        } else {
            return redirect()->route('404');
        }


    }


    public function edit($id)
    {

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
            'status' => 'sometimes|required|in:pending,in_progress,completed',
        ]);

        try {
            DB::transaction(function () use ($validated, $request,$project) {
                $project->update($validated);
            });

            DB::commit();
            return redirect()->route('/')->with('success', 'Project updated successfully.');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('/')->with('error', 'Failed to update project.');
        }

    }

}
