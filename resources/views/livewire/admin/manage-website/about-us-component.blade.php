            @if(session()->has('message'))
            <h3>
             <p class="alert alert-success">  {{ session('message') }} </p>
            </h3>
            @endif


           <form wire:submit.prevent="addAboutUs">
              <div class="form-group">
                <textarea  placeholder="something small to introduce company" class="form-control material" wire:model="aboutus"> </textarea> 
              </div>
              <div>
                @error('aboutus')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-warning text-uppercase waves">Submit</button>
              </div>


            </form>
