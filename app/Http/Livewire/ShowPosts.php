<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{


   public $course;

   function check(){
    if($this->course=="3"){
        $this->course="ok";
    }
   }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
