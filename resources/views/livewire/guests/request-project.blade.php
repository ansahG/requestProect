

       

    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2> Enter Request Project</h2>
          <p> Enter your special ID here to access your project</p> <br>

                 @if(session()->has('NoResult'))
                    <h3>
                    <h2 class="alert alert-danger">  {{ session('NoResult') }} </h2>
                    </h3>
                 @endif

           <form wire:submit.prevent="getProject" class="card">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="col-sm-12 col-md-10">
                        <div class="form-group">
                          <input wire:model="projectId" type="text" class="form-control" placeholder="put here your id" required="required" style="box-shadow: 15px 8px black;">
                        </div>
                        <div>
                        @error('projectId')
                            <p style="color:red">   {{ $message }} </p>
                        @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div> 
    </div>

    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
