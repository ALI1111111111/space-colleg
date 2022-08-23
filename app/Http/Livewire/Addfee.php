<?php

namespace App\Http\Livewire;

use App\Models\student;
use App\Models\Transaction;
use Livewire\Component;

class Addfee extends Component
{
    public $student,$transaction_data,
    $due,$fee,$test,$search;

public function transaction($id,$f_name){


    $this->transaction_data = Transaction::where('student_id',$id)
    ->where('course_status','Learning')
    ->join('courses','transactions.course_id','=','courses.id')
    ->join('students','transactions.student_id','=','students.id')
    // ->select('transactions.deposit_fee')
    ->get();
    $this->search=$f_name;
    


// $this->fun = intval($this->due)-intval($this->fee);

}

    public function render()
    {
        // $this->transaction_data = Transaction::where('student_id',$this->student)
        // ->where('course_status','Learning')
        // ->join('courses','transactions.course_id','=','courses.id')
        // ->join('students','transactions.student_id','=','students.id')
        // // ->select('transactions.deposit_fee')
        // ->get();
        if($this->search==''){
            $this->student_record= '';
        }else{
        $this->student_record = student::where('students.f_name', 'like', '%' . $this->search . '%')
        ->orWhere('students.id', 'like', '%' . $this->search . '%')->get();
    }
        return view('livewire.addfee');

    }
}
