@extends('layouts.admin')

@section('adminContent')



{{-- show_service_price --}}
	<div class="row">
@forelse($services as $service)
	  <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="content-box" style="text-align: center;">
            <div class=" big-box clearfix i-block">
              <a href="{{ route('editService', $service->service_name) }}" class=""  style="text-align:center;"> {{ $service->service_name }} </a>
            </div>
            <div class="clearfix"> GHS {{ $service->service_price }}/ service</div>
            <div class="big-box">
            		 {{ $service->service_description }}
            		 <span>
            		 	@if($service->show_service_price == true)
            	  			showing on the website
            	 		 @else
            	  		Price not visible to general public#
            	  		@endif
            		 </span>
            </div>

          </div>
        </div>

  
 @empty

<h3>  Sorry no services added, <a href="{{ route('manageWebsite') }}"> click to add one </a> </h3>

@endforelse 


@endsection
</div>