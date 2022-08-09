<?php

namespace App\Http\Livewire\Course;
use App\Models\course;

use Livewire\Component;

class Create extends Component
{
    public $course_name ,$course_fee ,$course_duration ,$more_info,$dat;

    public function resetInput()
    {
        $this->course_name = null;
        $this->course_duration = null;
        $this->course_fee =null;
        $this->more_info =null;
        $this->dat =null;


    }

    public function store()
    {

        // course::create([
        //     'course_name' => $this->course_name,
        //     'duration' => $this->course_duration,
        //     'course_fee' => $this->course_fee,
        //     'more_info' => $this->more_info


        // ]);
        // $validate = $this->validate([
        //     'course_name' => ['required', 'string', 'max:255'],
        //     'course_duration' => ['required', 'string', 'max:255'],
        //     'course_fee' => ['required', 'integer'],
        // ]);

        $stor = new course();
        $stor->course_name = $this->course_name;
        $stor->duration= $this->course_duration;
        $stor->course_fee = $this->course_fee;
        $stor->more_info = $this->more_info;
        $stor->save();
        $this->emit('postAdded');
        $this->resetInput();
        $this->dat="Data Added Succesfully";

        // return redirect()->to('/course');
    }

    public function render()
    {
        return view('livewire.course.create');
    }
}
