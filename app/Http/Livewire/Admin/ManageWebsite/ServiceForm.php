<?php

namespace App\Http\Livewire\Admin\ManageWebsite;

use Livewire\Component;

class ServiceForm extends Component
{



    public $service_name;
    public $service_description;
    // public $service_price;
    // public $show_service_price;

    public function resetValues()
    {
    return  $this->service_name = null;
    return  $this->service_description = null;
    // return  $this->service_price = null;
    // return  $this->show_service_price = null;
    }


 public function mount($service)
    {   $this->service = null;

        if($service)
        {
            $this->service = $service;
            $this->service_name = $this->service->service_name;
            $this->service_description = $this->service->service_description;
            // $this->service_price = $this->service->service_price;
            // $this->show_service_price = $this->service->show_service_price;
        }
    }


    public function submit()
    {
         $serviceInfo= $this->validate([
            'service_name' => ['required', 'max:40'],
            'service_description' => ['required','max:200'],
            // 'service_price' => ['max:100000', 'numeric'],
            // 'show_service_price' => ['nullable'], 
        ]);
         
         if($this->service)
            {
               auth()->user()->services()->update($serviceInfo);
               $this->resetValues();
                session()->flash('message', 'Service updated!');
            }
        else
            {        
                auth()->user()->services()->create($serviceInfo);
                $this->resetValues();
                session()->flash('message', 'Service saved with success!');
            }
    }

    public function render()
    {
        return view('livewire.admin.manage-website.service-form');
    }
}
