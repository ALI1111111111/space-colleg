<?php

namespace App\Http\Livewire\Student;

use App\Models\student;
use App\Models\course;
use App\Models\payment;
use App\Models\Transaction;


use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title, $body, $search = null;

    protected $listeners = ['user_registerd' => 'render'];
    public function edit($id)
    {



        $record = student::findOrFail($id);
        $this->title = $record->id;
        $this->body = $record->father;

        // if($record==0){

        //     student::where('id',$id)->delete();
        // }else{
        // $this->error=$record;
        // "First Delete Enrolled Course Data from profile";
        // }




    }
    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $this->course_data = course::all();
    //     $stud = student::all();
    // //     if($this->search=''){
     $stud =student::where('students.f_name', 'like', '%' . $this->search . '%')
     ->orWhere('students.id', 'like', '%' . $this->search . '%')
//      ->addSelect(['course_status' => Transaction::select('course_status')
//      ->whereColumn('student_id', 'students.id')
//     //  ->orderByDesc('arrived_at')
//      ->limit(1)
//      ])


//     ->addSelect(['total_sales' => payment::select(DB::raw('SUM(payments.amount_paid) as total_sales'))
//      ->whereColumn('student_id', 'students.id')

// //    ->sum('amount_paid')     ->limit(1)
//      ])
->join('transactions','students.id','=','transactions.id')
->join('courses','transactions.course_id',"courses.id")
->select('transactions.*','courses.*','students.id as sid','students.*')

     ->paginate(3);

        return view('livewire.student.index',['stud'=>$stud]);
    }
}
