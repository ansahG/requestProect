<?php

namespace App\Http\Livewire\Admin\ManageWebsite\Deletes;
use App\Models\admin\Service;
use Livewire\Component;

class DeleteService extends Component
{
    public $services;

    public function mount($services)
    {
        $this->services = $services;
    }


    public function removeService($id)
    {       
         Service::find($id)->delete();
        return redirect()->route('adminServices')->with('message', 'delete was succeful!');
    }

    public function render()
    {
        return view('livewire.admin.manage-website.deletes.delete-service');
    }
}
