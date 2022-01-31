<?php

namespace App\Http\Livewire\Admin\ManageWebsite;

use Livewire\Component;

class ContactInformation extends Component
{


    public $socialName;
    public $account;


    public function resetFields()
    {
        return $this->socialName  = null;
    }

    public function mount($contact)
    {   $this->contact = null;

        if($contact)
        {
            $this->contact = $contact;
            $this->socialName = $this->contact->socialName;
            $this->account = $this->contact->account;
        }
    }

    public function addContactInfo()
    {
        $contactInfo= $this->validate([
            'socialName' => 'required|max:40|',
            'account' => ['required','max:40'],
        ],
        [
            'socialName.required' => 'Please enter the plartform name and make sure its spelt correctly',
            'socialName.max' => 'Plarform name cant be more than 40 characters',
        ]
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
            return redirect()->back();
            }        
    }
    

    public function render()
    {
        return view('livewire.admin.manage-website.contact-information');
    }
}
