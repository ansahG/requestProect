@extends('layouts.admin')

@section('adminContent')

	@livewire('admin.manage-website.deletes.delete-booking', ['bookings' => $bookings])

@endsection