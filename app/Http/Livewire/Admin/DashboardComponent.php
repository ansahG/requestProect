<?php

namespace App\Http\Livewire\Admin;
use App\Models\Booking;
use App\Models\admin\project\AddProject;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-component',[
            'bookingsCount' => Booking::count(),
            'esttimatedIncome'=> auth()->user()->addProject()->get()->sum('amount_charged'),
            'projects'=> AddProject::get(),
        ]);
    }
}
