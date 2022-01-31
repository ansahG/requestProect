<?php

namespace App\Http\Livewire\Guests;
use App\Models\admin\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.guests.services',[
            'services' => Service::get(['service_name','service_description']),
        ]);
    }
}
