<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    function Index(){
        $tasks=Task::all();
        return view('tasks.admin_index', compact('tasks'));
    }
}
