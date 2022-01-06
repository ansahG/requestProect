<div>

            @if(session()->has('message'))
            <h3>
             <p class="alert alert-success">  {{ session('message') }} </p>
            </h3>
            @endif

            <form wire:submit.prevent="submit">
              <div class="form-group">
                <input type="text" class="form-control material"  placeholder="Service name" wire:model="service_name">
              </div>
              <div>
                @error('service_name')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>


              <div class="form-group">
                <textarea  placeholder="Add service description" class="form-control material" wire:model="service_description"> </textarea> 
              </div>
              <div>
                @error('service_description')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <input  type="number" placeholder="Add price for this service" class="form-control material" wire:model="service_price">
              </div>
              <div>
                @error('service_price')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>


              <div class="form-group">
                <div class="checkbox">

                  <input type="checkbox" id="agree" wire:model="show_service_price" style="color:yellow">
                  <label for="agree">Show price on website</label>

                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-warning text-uppercase waves">Submit</button>
              </div>


            </form>
</div>
