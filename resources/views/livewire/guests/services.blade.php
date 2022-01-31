    @forelse($services as $service)

        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-book"></i>
            </div>
            <div class="service-info">
              <h3>{{ $service->service_name }}</h3>
              <p>{{ $service->service_description }}</p>
            </div>
        </div>
        @empty

        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-book"></i>
            </div>
            <div class="service-info">
              <h3> Grab a glass of water <h3>
              <p>Grab a glass of water, there is not a single service to show now. maybe Im still under contruction or admin is still contemplating whether to not abandon me. or maybe just watching Naruto</p>
            </div>
        </div>

    @endforelse