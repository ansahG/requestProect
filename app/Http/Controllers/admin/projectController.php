<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\project\AddProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function addProject()
    {
        return view('adminDashboard.project.addProject');
    }

     public function viewProject(AddProject $project)
    {
        return view('adminDashboard.project.viewProject', compact('project'));
    }

    
}
