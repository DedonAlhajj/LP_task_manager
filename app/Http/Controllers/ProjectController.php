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

        if (Auth::user()->id->hasRole('Admin') || Auth::user()->id->hasRole('Manager')) {
            $projects = Project::all();

        } elseif (Auth::user()->id->hasRole('Team Member')) {
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
