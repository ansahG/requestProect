@extends('layouts.admin')

@section('adminContent')

<div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">
          <div class="content-box" style="text-align: center;">
            <div class="content-title big-box i-block">
              <h4 class="zero-m"><a href="{{ route('adminServices') }}">Services </a></h4>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">

            		@livewire('admin.manage-website.service-form', ['service' => null])

            </div>
          </div>
        </div>


        {{-- contact nformaion from here --}}
        <div class="col-lg-6 col-md-4 col-sm-12">
          <div class="content-box" style="text-align: center;">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">Contact / Social address</h4>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">

              @livewire('admin.contact-information', ['contact' => null])
            </div>
          </div>
        </div>
        {{-- major row ends here for the services and the contact --}}
</div>


@endsection