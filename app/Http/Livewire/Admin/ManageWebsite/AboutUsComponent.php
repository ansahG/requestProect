<?php

namespace App\Http\Livewire\Admin\ManageWebsite;

use Livewire\Component;

class AboutUsComponent extends Component
{
    public $aboutus;
    // defined this object seperately so that is is easily accessible by all fuction in this class with just the $this prefix. Thats because we are having a seperate function call for validation
    private $data;

    // this function is only here to validate. we call it in requests for the validation to be done DRY principle
    public function validator()
    {
         $this->data = $this->validate([
            'aboutus' => 'required|max:388|min:30',
        ]);
    }

    public function mount($aboutus)
    {   $this->aboutus = null;

        if($aboutus)
        {
            $this->aboutus = $aboutus;
            $this->aboutus = $this->aboutus->aboutus;
        }
    }
    
    // posting the aboput us into thew database
    public function addAboutUs()
    { 
        $this->validator();

        if($this->aboutus)
        {
            auth()->user()->aboutus()->update($this->data);
            session()->flash('message', 'Updated succefully');
        }
            else{
        auth()->user()->aboutus()->create($this->data);
        session()->flash('message', 'Added succefully');
            }
    }

    public function render()
    {
        return view('livewire.admin.manage-website.about-us-component');
    }
}
