<?php

namespace App\Http\Livewire;

use App\Models\course as ModelsCourse;
use Livewire\Component;

class Course extends Component
{


    public $name,$duration,$fee;
    public $updateMode = true;
    private function resetInput()
     {
         $this->name = null;
         $this->duration = null;
         $this->course_fee =null;
     }
     public function store()
     {

         // course::create([
         //     'course_name' => $this->name,
         //     'duration' => $this->duration,
         //     'course_fee' => $this->fee,


         // ]);
         $stor = new course();
         $stor->course_name = $this->name;
         $stor->duration= $this->duration;
         $stor->course_fee = $this->fee;
         $stor->save();
         $this->resetInput();
         return redirect()->to('/course');
     }
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
