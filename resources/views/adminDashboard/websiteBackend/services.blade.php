@extends('layouts.admin')

{{-- this page stacks the services for us to see in cards --}}
@section('adminContent')
  @livewire('admin.manage-website.deletes.delete-service' , ['services' => $services])
@endsection
</div>