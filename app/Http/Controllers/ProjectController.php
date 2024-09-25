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
        Auth::check()
        $this->user = Auth::user();

    }


    public function index(Request $request)
    {
        $projects = [];

        if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Manager')) {
            $projects = Project::all();

        } elseif (Auth::user()->hasRole('Team Member')) {
            //عرض المشاريع التي يكون للمستخدم (Auth) مهام موكلة إليه فيها فقط
            $projects = $this->user->projects;

        }
        dd($projects);
        return view('projects.index', compact('projects'));


    }


    public function create()
    {

    }
}
