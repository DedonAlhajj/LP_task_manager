<?php

namespace App\Http\Controllers;

use App\Models\Project;
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


    public function index(Request $request)
    {
        $projects = [];

        if ($this->user->hasRole('Admin') || $this->user->hasRole('Manager')) {
            $projects = Project::all();

        } elseif ($this->user->hasRole('Team Member')) {
            //عرض المشاريع التي يكون للمستخدم (Auth) مهام موكلة إليه فيها فقط

            $projects = Project::with('tasks.users')->whereHas('tasks.users', function ($query) {
                $query->where('user_id', $this->user->id);
            })->get();


        }

        return view('projects.index', compact('projects'));


    }


    public function create()
    {

    }
}
