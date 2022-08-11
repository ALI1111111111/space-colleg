<?php

namespace App\Http\Livewire\Student;
use App\Models\course;
use App\Models\student;


use Livewire\Component;

class Edit extends Component
{
    public $course_id,$student;

    public function increasing(){
$this->student = course::where('id',$this->course_id)->get();
// $this->course_id= null;


    }


    public function render()
    {
        $this->course_data = course::all();
        return view('livewire.student.edit');
    }
}
