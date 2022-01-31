<?php

namespace App\Http\Livewire\Admin\ManageWebsite\Deletes;
use App\Models\Booking;
use Livewire\Component;

class DeleteBooking extends Component
{   
    public $bookings;

    public function mount($bookings)
    {
        $this->bookings = $bookings;
    }

    public function delete($id)
    {
           Booking::find($id)->delete();
          return redirect()->route('checkBookings');
    }

    public function render()
    {
        return view('livewire.admin.manage-website.deletes.delete-booking');
    }
}
