 			

		@if(session()->has('message'))
            <h3>
             <p class="alert alert-success">  {{ session('message') }} </p>
            </h3>
        @endif

 			<form wire:submit.prevent="addContactInfo">
 			<div class="form-group">
                <input  type="text" placeholder="facebook" class="form-control material" wire:model="facebook">
              </div>
              <div>
                @error('facebook')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <input type="text" class="form-control material"  placeholder="LinkedIn Name/ id" wire:model="linkedIn">
              </div>
              <div>
                @error('linkedIn')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <input  type="type" placeholder="whatsapp Number" class="form-control material" wire:model="whatsapp">
              </div>
              <div>
                @error('whatsapp')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <input  type="type" placeholder="Twitter @" class="form-control material" wire:model="twitter">
              </div>
              <div>
                @error('twitter')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <input  type="text" placeholder="Instagram" class="form-control material" wire:model="instagram">
              </div>
              <div>
                @error('instagram')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>


             
              <div class="form-group">
                <button type="submit" class="btn btn-warning text-uppercase waves">Submit</button>
              </div>


            </form>

            @foreach($contactinfo as $contactinfo)
            <div>
            	<div> {{ $contactinfo->facebook }}</div>
            	<div> {{ $contactinfo->whatsapp }}</div>
            	<div> {{ $contactinfo->linkedIn }}</div>
            	<div> {{ $contactinfo->Instagram }}</div>
            	<div> {{ $contactinfo->twitter }}</div>
            <a href="{{ route('contactInfo',[auth()->user()->name, $contactinfo->id] ) }}" class="btn btn-info text-uppercase waves"> Edit social info </a>
            </div>
            @endforeach
