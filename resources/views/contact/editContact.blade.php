@extends('layouts.admin')

@section('adminContent')

    @livewire('admin.contact-information', 'contact' => $contact)

@endsection