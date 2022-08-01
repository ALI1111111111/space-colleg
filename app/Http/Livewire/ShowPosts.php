<?php

namespace App\Http\Livewire;
use App\Models\course;

use Livewire\Component;

class ShowPosts extends Component
{


   public $name,$duration,$fee;
   public $updateMode = false;
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

    public function render()
    {
        $this->data = course::all();
        return view('livewire.show-posts');
    }
}
