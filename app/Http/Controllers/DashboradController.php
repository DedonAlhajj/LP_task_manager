<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboradController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $user;
    protected $taskRepo;


    public function __construct()
    {
        Auth::check();


    }

    public function index()
    {
        $projects = collect();
        $projects1 = collect();
        $projects2 = collect();
        $urgentTasks = collect();
        $urgentTasks1 = collect();
        $urgentTasks2 = collect();
        $u = Auth::user();

        if ($u->hasRole('Admin')) {
            $projects = Project::take(10)->get();

            $urgentTasks = Task::where('end_date', '<=', now()->addDays(3)) // استخدام end_date بدلاً من due_date
            ->where('status', '!=', 'Completed')
                ->take(10) // تحديد عدد النتائج بـ 10 فقط
                ->get();


        }
        if ($u->hasRole('Manager')) {

            $projects1 = $u->tasksCreated()->take(5)->get();

            $urgentTasks1 = Auth::user()->tasksCreated()
                ->whereHas('tasks', function ($query) {
                    $query->where('end_date', '<=', now()->addDays(3))
                        ->where('status', '!=', 'Completed');
                })
                ->with(['tasks' => function ($query) {
                    $query->where('end_date', '<=', now()->addDays(3))
                        ->where('status', '!=', 'Completed')
                        ->take(5); // تحديد عدد النتائج بـ 10 فقط
                }])
                ->get()
                ->pluck('tasks')
                ->flatten();


        }

            $projects2 = Project::with('tasks')
                ->whereHas('users', function ($query) {
                    $query->where('users.id', auth()->id()); // تحديد جدول المستخدمين
                })->paginate(10);

            $urgentTasks2 = Auth::user()->tasks()
                ->where('end_date', '<=', now()->addDays(3))
                ->where('status', '!=', 'Completed')
                ->take(10) // تحديد عدد النتائج بـ 10 فقط
                ->get();




        return view('dashboard',
            compact('projects', 'projects1', 'projects2', 'urgentTasks', 'urgentTasks1', 'urgentTasks2'));
    }


}
