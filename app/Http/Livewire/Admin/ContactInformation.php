<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ContactInformation extends Component
{


    public $facebook;
    public $linkedIn;
    public $whatsapp;
    public $twitter;
    public $instagram;

    public function resetFields()
    {
        return $this->facebook  = null;
        return $this->linkedIn  = null;
        return $this->whatsapp  = null;
        return $this->twitter   = null;
        return $this->instagram = null;
    }

    public function mount($contact)
    {   $this->contact = null;

        if($contact)
        {
            $this->contact = $contact;
            $this->facebook = $this->contact->facebook;
            $this->linkedIn = $this->contact->linkedIn;
            $this->whatsapp = $this->contact->whatsapp;
            $this->twitter = $this->contact->twitter;
            $this->instagram = $this->contact->instagram;
        }
    }

    public function addContactInfo()
    {
        $contactInfo= $this->validate([
            'facebook' => ['max:40'],
            'linkedIn' => ['max:40'],
            'whatsapp' => ['digits:9'],
            'twitter' => ['max:40'],
            'instagram' => ['max:40'], 
        ],
        [
         'whatsapp.digits' => "Whatsapp number should be 9 digits without the 0 and the +233"   
        ],
    );// validation ends here
        if($this->contact)
            {
                auth()->user()->contactInformation()->update($contactInfo);
                 $this->resetFields();
            session()->flash('message', 'Social / contacts updated with success!');
            }
        else
            {
                auth()->user()->contactInformation()->create($contactInfo); 
                 $this->resetFields();
            session()->flash('message', 'Information saved with success!');
            }        
    }
    

    public function render()
    {
        return view('livewire.admin.contact-information', [

            'contactinfo' => auth()->user()->contactInformation()->get(),
        ]);
    }
}
