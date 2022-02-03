<?php

namespace App\Http\Livewire\Guests;
use App\Models\admin\project\AddProject;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\admin\projectController;
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
            // this response will hit the projectController action and download the project without necessary loadin a web route uri
            // meanwhile we need to define a well methid uri in the route si the this method will use that to respond t the controller action through a javascript ajax method though it wont load the url in the browser
            // here for some cool docs on this https://laravel.com/docs/8.x/responses#redirecting-controller-actions
            return redirect()->action(
            [
                projectController::class, 'guestViewProject'], ['projectId' => $this->projectId]
            );
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

