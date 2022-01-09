@extends('layouts.admin')

@section('adminContent')


@livewire('admin.project.add-project', ['project' => $project])

@endsection