<?php

namespace App\Http\Controllers\User;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    function Index(){
        $tasks=auth()->user()->tasks;
        return view('tasks.user_index', compact('tasks'));
    }
}
