<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $newProject = Project::all();

        return view('welcome', compact('newProject'));
    }
    
}
