<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    // دالة لعرض الإشعارات
    public function index()
    {
        return view('notifications.index');
    }
    public function index1()
    {
        $notifications = Auth::user()->notifications()->orderBy('created_at', 'desc')->get();
        return view('notifications.index', compact('notifications'));
    }

}
