<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    protected $user;
    protected $taskRepo;


    public function __construct()
    {
        $this->user = Auth::user();
    }


    /**
     * عرض المهام بناءً على دور المستخدم
     */
    public function index(Request $request)
    {
        // التحقق من دور المستخدم وتحميل البيانات المناسبة
        if ($this->user->hasRole('Admin') || $this->user->hasRole('Manager')) {
            $tasks = Task::all();
        }

        return view('dashboard', compact('tasks', 'user'));
    }

    /**
     * إنشاء مهمة جديدة من قبل المدير
     */
    public function create()
    {
        $this->authorize('create', Task::class);

        if ($this->user->role === 'manger') {
            $users = User::all();
            return view('tasks.create', compact('users'));
        }

        return redirect()->route('404');
    }
}
