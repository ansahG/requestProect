@extends('layouts.admin')

@section('adminContent')


<div class="row">
        <div class="col-lg-12">
          <div class="row">
        @forelse($inbox as $inbox)

            <a href="{{ route('readMessage' , $inbox->subject) }}" class="col-sm-12 col-md-6 col-lg-4">
              <div class="content-box ultra-widget">
                <div class="w-content big-box">
                  <div class="w-progress">
                    <span class="w-amount blue">{{ $inbox->title}}</span>
                    <br>
                    <span class="text-uppercase w-name">{{ $inbox->email}}</span>
                  </div>
                  <span class="w-refresh w-p-icon"><i class="fa fa-inbox"></i></span>
                  <div class="progress progress-bar-sm zero-m">
                   </div>
                  </div> 
                </div>
              </a>

        @empty
             <div class="container card">
             	<h3 style="color:red"> Nothing in your inbox right now. </h3>
             </div>     	
        @endforelse



            </div>
        </div>
    </div>
</div>


@endsection