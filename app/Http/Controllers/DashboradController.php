<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        $projects = [];
        $u = Auth::user();
        if (Auth::user()->hasRole('Admin')) {
            $projects = Project::all();

        }elseif (Auth::user()->hasRole('Manager')){

            $projects = $u->tasksCreated;
            dd($projects);
        }
        elseif (Auth::user()->hasRole('Team Member')) {
            //عرض المشاريع التي يكون للمستخدم (Auth) مهام موكلة إليه فيها فقط
            $projects = $u->projects;

        }
        //dd($projects);
        return view('index', compact('projects'));
    }


}
