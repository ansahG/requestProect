<?php

namespace App\Http\Controllers\admin;

use App\Models\AboutUs;
use App\Models\admin\ContactInformation;
use App\Models\admin\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function manageWebsite()
    {
            $aboutus = auth()->user()->aboutus()->get();
        return view('adminDashboard.websiteBackend.index', compact('aboutus'));
    }
    public function services()
    {
        $services = auth()->user()->services()->get();
        return view('adminDashboard.websiteBackend.services', compact('services'));
    }


      public function editService(Service $service)
    {
        return view('adminDashboard.websiteBackend.editService', compact('service'));
    }

    public function aboutUseEdit(AboutUs $aboutus)
    {
        return view('adminDashboard.websiteBackend.editaboutus', compact('aboutus'));
    }

}