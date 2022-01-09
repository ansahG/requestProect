<?php

namespace App\Http\Livewire\Admin\Project;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;


class AddProject extends Component
{
    use WithFileUploads;

   public $project_theme;
   public $company_name;
   public $company_email;
   public $project_description;
   public $amount_charged;
   public $projectDocs;
   public $projectId;


       public function mount($project)
    {   $this->project = null;

        if($project)
        {
            $this->project = $project;
            $this->project_theme = $this->project->project_theme;
            $this->company_name = $this->project->company_name;
            $this->company_email = $this->project->company_email;
            $this->project_description = $this->project->project_description;
            $this->amount_charged = $this->project->amount_charged;
            $this->projectDocs = $this->project->projectDocs;
            $this->projectId = $this->project->projectId;
        }
    }


   public function addProject()
   {
    $projectInfo = $this->validate([
        'project_theme' =>['required','max:30'],
        'company_name' =>['required','max:30'],
        'company_email' =>['required','email'],
        'project_description' =>['required','max:200'],
        'amount_charged' =>['required', 'numeric'],
        'projectDocs' =>'mimes:docx,pdf',
    ],
        [
            'amount_charged.required' => 'for statistcal puporses, you have to enter the amount charged for this project'
        ],
    );

       if($this->project)
       {
                     // we will not let user enter the ID manually so after validation, we smartly use the validated price charged and then hash it to represent the id. Here we do not need to validate the id since its system generated and ai powered so we bring tha outa the validation closure 
          if($this->project->projectDocs)// step 1 (THE projectDocs HERE IS THE NAME OF THE STORAGE DISK WE CONFIGURED IN THE FILE SYSTEM)
            {
                // step 2
            Storage::disk('ProjectDisk')->delete($this->project->projectDocs);//delete existing file from the disk
            };
            $projectInfo['projectId'] = Hash::make($projectInfo['amount_charged']);
             
            $projectInfo['projectDocs'] = $this->projectDocs->store('/', 'ProjectDisk');
            auth()->user()->addProject()->update($projectInfo);
            session()->flash('message', 'project updated with success');
       }
        else
        {
             // we will not let user enter the ID manually so after validation, we smartly use the validated price charged and then hash it to represent the id. Here we do not need to validate the id since its system generated and ai powered so we bring tha outa the validation closure 
        $projectInfo['projectId'] = Hash::make($projectInfo['amount_charged']);
             
            $projectInfo['projectDocs'] = $this->projectDocs->store('/', 'ProjectDisk');
            auth()->user()->addProject()->create($projectInfo);
            session()->flash('message', 'project added with success');
        }//else enda here
   }


    public function render()
    {
        return view('livewire.admin.project.add-project', [
            'projects' => auth()->user()->addProject()->get(),
        ]);

    }
}
