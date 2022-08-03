<?php

namespace App\Http\Livewire;

use App\Models\course as ModelsCourse;
use Livewire\Component;

class Course extends Component
{


    public $name,$duration,$fee;
    public $updateMode = true;
    public $postAdded;

    protected $listeners = ['postAdded' => 'render'];

    // public function incrementPostCount()
    // {
    //     $this->postCount = ModelsCourse::count();
    // }
    // private function resetInput()
    //  {
    //      $this->name = null;
    //      $this->duration = null;
    //      $this->course_fee =null;
    //  }

     public function destroy($id)
     {
         if ($id) {
             $record = ModelsCourse::where('id', $id);
             $record->delete();
         }
        }
    public function render()
    {
        $this->data = ModelsCourse::all();
        $this->test = count($this->data);

        return view('livewire.course');
    }
}
