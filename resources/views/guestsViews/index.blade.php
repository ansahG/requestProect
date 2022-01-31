  {{-- this view is the only blade file that will extend the guest layout for technical reasons that we cant route to the guest layout by the web file --}}
{{-- this we extend the layout with this view and then make sure that all the neccessary sections are filled with the section call by this blade --}}
    @extends('layouts.guests')



    @section('services')
        @livewire('guests.services')
    @endsection

        @section('aboutus')
        @livewire('guests.about-us-section')
    @endsection

    @section('requestProject')
        @livewire('guests.request-project')
    @endsection

    @section('makeBookings')
        @livewire('guests.make-bookings')
    @endsection

    @section('socialInfomations')
{{--     	@livewire('guests.contacts-information')
 --}}   @endsection