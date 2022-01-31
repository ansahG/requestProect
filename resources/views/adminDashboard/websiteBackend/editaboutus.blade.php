
@extends('layouts.admin')

@section('adminContent') 

<div class="row">
  <div class="col-lg-6 col-md-8 col-sm-12">
          <div class="content-box" style="text-align: center;">
            <div class="content-title big-box i-block">
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
              <h3> Something straight to the point aint bad</h3>
                  @livewire('admin.manage-website.about-us-component', ['aboutus' => $aboutus])
            </div>
          </div>
        </div>

</div>

@endsection
