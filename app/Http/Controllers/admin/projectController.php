<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\project\AddProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class projectController extends Controller
{
    public function addProject()
    {
        return view('adminDashboard.project.addProject');
    }

     public function AdminViewProject(AddProject $project)
    {
        return view('adminDashboard.project.viewProject', compact('project'));
    }

    public function guestViewProject(AddProject $projectId)
    {
        $file = $projectId->projectDocs;
         // return Storage::disk('ProjectDisk')->download($file);
        return view('guestsViews.thankYou');
    }
}
