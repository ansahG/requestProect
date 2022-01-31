<?php

namespace App\Http\Livewire\Guests;
use App\Models\admin\project\AddProject;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;
// ('storage/projectDocs/'
class RequestProject extends Component
{
    public $projectId;

        // public function mount()

// what is happening here
    public function getProject()
    {
        // we get the input from the request input field and validate it
        $data = $this->validate([
           'projectId' => 'required|min:10|string',
        ]);

        // we search the projects database where the projects special encrypted id equals to the input(projectId) from the form
        $projectFindingBus = AddProject::where('projectId', $data['projectId'])->get('projectId');

        // conditin here, if the query is done and we find a project of that input id and its 1 or equal to one then we redirect the guest to the project page.
        if($projectFindingBus->count() >= 1)
        {
            return redirect()->route('loadFoundProject', $this->projectId);   
        }
        // else if there is no project foud with that searched id(projectId), then we return this message to him/ her on the page
            else{
           session()->flash('NoResult' , 'No project exist for this ID!');
           }
    }
    public function render()
    {
        return view('livewire.guests.request-project');
    }
}







  // use WithPagination;

  //   public $term;
  //   // make a public variable of the models you want to search from
  //   // i this case, we use the public skills and users variable
  //   // public $users;
  //   // public $skills;

  //   public function render()
  //   {
  //        $term = '%' . $this->term . '%';
        
  //       $data = [
  //           "skillCategory" => SkillCategory::where('name', 'like', $term)->get()
  //       ];

  //       return view('livewire.search', $data);
  
  //   }



// @if($term)
//     <div class="row">
//         <div class="">
//             @if($term != "")
//                 @if($skillCategory->isEmpty())
//                     <p>No results for <span style="color:red"> {{ "'$term'" }} </span></p>
//                 @else
//                     @foreach($skillCategory as $skillCategory)
//                     <p style="align-content:center;"> results for <span style="color:green"> {{ "'$term'"     }} </span>: </p>
//                                                 <a href="" class="flex items-center">
//                     <a href="/{{ $skillCategory->majorCat->name }}/{{ $skillCategory->name }} ">  
//                      <div class="ml-3">{{ $skillCategory->name }} in
//                      <small style="color: blueviolet;font-style: bold">{{ $skillCategory->majorCat->name }} </small>
//                        </div>
//                     </a>

//                         </a>
//                     @endforeach
//                 @endif
//             @endif
//         </div>
   

//     </div>

// @endif