@extends('layouts.admin')

@section('adminContent')


<div style="text-align:center" class="container">
    @livewire('admin.contact-information', ['contact' => $contact])
</div>
@endsection