<?php

namespace App\Http\Livewire\Student;
use App\Models\course;
use App\Models\student;


use Livewire\Component;

class Edit extends Component
{
    public $course_data='',$search='',$data;
    protected $queryString = ['search'];
 

    public function increasing($id){
        // $this->course_data = course::where('course_name', 'like', '%' . $this->search . '%')->get();

$this->data= student::join("transactions",'students.id','=','transactions.id')
->join('courses','transactions.course_id','=','courses.id')
->join('payments','transactions.id','=','payments.transaction_id')
->where('students.id',$id)->get();
$this->course= course::all();

    }


    public function render()
    {
        if($this->search==''){
            $this->course_data= '';
        }else{
            $this->course_data = student::where('students.f_name', 'like', '%' . $this->search . '%')
            // ->join('transactions','students.id','=','transactions.student_id')
            ->get();

        }


            return view('livewire.student.edit');
    }
}
