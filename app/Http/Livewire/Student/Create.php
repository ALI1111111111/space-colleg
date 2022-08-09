<?php

namespace App\Http\Livewire\Student;
use App\Models\course as ModelsCourse;


use Livewire\Component;

class Create extends Component
{

    public $message;
    public function render()
    {
        $this->data = ModelsCourse::all();

        return view('livewire.student.create');
    }
}
