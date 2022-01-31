<?php

namespace App\Http\Livewire\Guests;
use App\Models\Booking;
use Livewire\Component;

class MakeBookings extends Component
{
    public $countryCode;
    public $name;
    public $subject;
    public $phone;
    public $email;
    public $message;

    public function resetBokingFields()
    {
        return $this->countryCode = null;
        return $this->name = null;
        return $this->subject = null;
        return $this->phone = null;
        return $this->email = null;
        return $this->email = null;
        return $this->message = null;
    }

      public function createBooking() 
    {
        $booking = $this->validate([
            'countryCode' => 'required|digits:3',
            'name' => 'required|min:5|max:25',
            'subject' => 'required|min:5|max:25',
            'phone' => 'required|digits:10',
            'email' => 'required|min:5|max:25|email',
            'message' => 'required|min:5|max:110',
        ]); 



        // send the mesage as an email to myles about the new enquiry, 
        // save a copy of te message so it is availablr for ease of acces if is he in the app and email not reachable

        // we set the value of the phone to the input value with the country code for saving such that the phone is the country code with the input phone
                $booking['phone'] = $booking['countryCode'].$booking['phone'];
                // we then set the country code to null right after, so it is not taken to the database where we get an error because no table exist for it
                 $booking['countryCode'] = null;
                Booking::create($booking);
                // session()->flash('message', 'Message has been sent succesfully!');
        // send an email to the enquire about the stuff that his enquiry has been submited sucessfuly
                $this->resetBokingFields();
    }

    public function render()
    {
        return view('livewire.guests.make-bookings');
    }
}
