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
        return view('adminDashboard.Project.addProject');
    }

     public function AdminViewProject(AddProject $project)
    {
        return view('adminDashboard.project.viewProject', compact('project'));
    }

    public function guestViewProject(AddProject $projectId)
    {
        $file = $projectId->projectDocs;
        // $load =  download('storage/projectDocs/'.$file, 200);
        // $redi = view('guestsViews.thankYou');

        //     return response([$load, $redi]);
        // return response()
        // ->download('storage/projectDocs/'.$file)
        //     ->redirect()->route('thankYou');

        return Storage::disk('ProjectDisk')->download($file);
        // return view('guestsViews.thankYou');
    }
}
