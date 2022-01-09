 			

		@if(session()->has('message'))
            <h3>
             <p class="alert alert-success">  {{ session('message') }} </p>
            </h3>
        @endif


              <div class="row">

        {{-- form div starts here --}}

        <div class="col-lg-6">
          <div class="content-box">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">
                @if($project)
                Edit project
                @else
                Add Project
                @endif

              </h4>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
              {{-- actual form starts here --}}
          <form wire:submit.prevent="addProject" class="">
               <div class="form-group">
                <input  type="type" placeholder="Research/ Project Theme" class="form-control material" wire:model="project_theme">
              </div>
              <div>
                @error('project_theme')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>
                <input  type="text" placeholder="Company Name" class="form-control material" wire:model="company_name">
              <div>
                @error('company_name')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <input type="email" class="form-control material"  placeholder="Company Email" wire:model="company_email">
              </div>
              <div>
                @error('company_email')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <label for="description"> Project Description </label>
                <textarea  type="type" placeholder="Description" class="form-control material" wire:model="project_description"> </textarea>
              </div>
              <div>
                @error('project_description')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

               <div class="form-group">
                <input  type="number" placeholder="Charged Amount" class="form-control material" wire:model="amount_charged">
              </div>
              <div>
                @error('amount_charged')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>

              <div class="form-group">
                <label for="projectDocs" style="background-color: yellow; min-width: 300px; ">  
                <input  type="file" placeholder="Document here" class="form-control material" wire:model="projectDocs" hidden="">
                </label>
              </div>
              <div>
                @error('projectDocs')
                <small style="color:red"> {{ $message }} </small>
                @enderror
              </div>
             
              <div class="form-group">
                <button type="submit" class="btn btn-warning text-uppercase waves">Add Project</button>
              </div>

            </form>   
                          {{-- actual form ends here --}}
      
           </div>
          </div>
        </div> {{-- form div row ends here --}}



{{-- loaded projects div and card starts here --}}
        <div class="col-lg-6">
          <div class="content-box">
            <div class="content-title big-box i-block">
              <h4 class="zero-m">Project activity</h4>
              <div class="content-tools i-block pull-right">
                <a class="repeat-btn">
                  <i class="fa fa-repeat" wire:click="$refresh"></i>
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="big-box">
             {{-- form starts here --}}
            
            @forelse($projects as $project)
            <a href="{{ route('viewProject', $project->project_theme) }}">

            {{ $project->project_theme }} for {{$project->company_name}}

            </a>
            @empty
              <h3> No project added or in progress, add one there  </h3>
            @endforelse

            </div>
          </div>
        </div>
        {{-- loaded projects div and card starts here --}}


      </div>
      {{-- main row div ends here --}}
