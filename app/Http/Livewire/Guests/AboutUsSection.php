<?php

namespace App\Http\Livewire\Guests;
use App\Models\AboutUs;
use Livewire\Component;

class AboutUsSection extends Component
{

    public function render()
    {
        return view('livewire.guests.about-us-section',[
             'aboutus' => AboutUs::get(),
        ]);
    }
}
