<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Models\admin\ContactInformation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function editContact(User $user, ContactInformation $contact)
    {
        
            return view('adminDashboard.websiteBackend.contactEdit', compact('contact'));

    }
}
