@extends('layouts.admin')

@section('adminContent')

@livewire('admin.manage-website.service-form', ['service' => $service])


@endsection