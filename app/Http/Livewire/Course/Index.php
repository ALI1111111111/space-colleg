<?php

namespace App\Http\Livewire\Course;

use App\Models\course;
use Livewire\Component;

class Index extends Component
{
    public  $course_name, $course_duration, $post_id, $course_fee, $more_info;
    protected $listeners = ['postAdded' => 'render'];
    public function destroy($id)
    {
        if ($id) {
            $record = Course::where('id', $id);
            $record->delete();
        }
    }
    public function resetInput()
    {
        $this->course_name = null;
        $this->course_duration = null;
        $this->course_fee =null;
        $this->more_info =null;
        // $this->dat =null;


    }
public function update(){
    $stor = course::findOrFail($this->post_id);
    $stor->course_name = $this->course_name;
    $stor->duration= $this->course_duration;
    $stor->course_fee = $this->course_fee;
    $stor->more_info = $this->more_info;
    $stor->save();
    $this->emit('postAdded');
    $this->resetInput();
    $this->dat="Data Added Succesfully";
}

    public function edit($id)
    {
        $post = course::findOrFail($id);
        $this->post_id = $id;
        $this->course_name = $post->course_name;
        $this->course_duration = $post->duration;
        $this->course_fee = $post->course_fee;
        $this->more_info = $post->more_info;


        $this->updateMode = true;
    }
    public function render()
    {
        $this->data = Course::all();
        $this->test = count($this->data);
        return view('livewire.course.index');
    }
}
