
@extends('layouts.admin')

@section('adminContent')


{{-- about u section for entering data --}}

<div class="row">
  <div class="col-lg-6 col-md-8 col-sm-12">
          <div class="content-box" style="text-align: center;">
            <div class="content-title big-box i-block">
            </div>
            <div class="clearfix"></div>
            <div class="big-box">

              @forelse($aboutus as $aboutus)
                <a class="btn btn-info" href="{{ route('editAboutUs', $aboutus->aboutus ) }}"> click to edit </a>
                <h4> {{ $aboutus->aboutus }} </h4>
              @empty
              <h3> Something straight to the point aint bad</h3>
                  @livewire('admin.manage-website.about-us-component', ['aboutus' => null])
              @endforelse

            </div>
          </div>
        </div>


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


     
        {{-- major row ends here for the services and the contact --}}
</div>


@endsection

