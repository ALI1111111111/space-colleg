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
public function search(){
    $this->title =  student::join('transactions', 'students.id', '=', 'transactions.student_id')
    ->join('payments', 'transactions.id', '=', 'payments.transaction_id')
    ->where('students.f_name', 'like', '%' . $this->search . '%')
    ->orWhere('students.id', 'like', '%' . $this->search . '%')
    // ->sum('payments.amount_paid')
    ->select(
        'students.*',
        // 'students.id',
        // 'students.father',
        'transactions.*',
        // 'transactions.deposit_fee',

        DB::raw('SUM(payments.amount_paid) as total_sales'),
        // 'students.id'
    )
    ->paginate(10);
}
    // public function render()
    // {
    //     // if($this->error= ''){

    //     //     $this->stud = student::all();
    //     // }else{
    //         $this->stud = student::where('f_name','like','%'.$this->search.'%')
    //         ->orWhere('id','like','%'.$this->search.'%')->paginate(2);
    //     // }

    //     // where(function($q) use($studentId) {
    //     //     $q->where('class_name', 'like', '%,' . $studentId . ',%')
    //     //     $q->orWhere('class_name', 'like', $studentId . ',%')
    //     //     $q->orWhere('class_name', 'like', '%,' . $studentId)
    //     // })
    //     // ->where($matchThese)->get();

    //     return view('livewire.student.index');
    // }
    public function render()
    {
        $this->course_data = course::all();
    //     $stud = student::all();
    // //     if($this->search=''){
     $stud =student::where('students.f_name', 'like', '%' . $this->search . '%')
     ->orWhere('students.id', 'like', '%' . $this->search . '%')
     ->addSelect(['course_status' => Transaction::select('course_status')
     ->whereColumn('student_id', 'students.id')
    //  ->orderByDesc('arrived_at')
     ->limit(1)
     ])
     ->addSelect(['deposit_fee' => course::select('course_fee')
     ->whereColumn('student_id', 'students.id')
    //  ->orderByDesc('arrived_at')
     ->limit(1)
     ])
    //  join('transactions.student_id','students.id','=','transactions.student_id')
    ->addSelect(['total_sales' => payment::select(DB::raw('SUM(payments.amount_paid) as total_sales'))
     ->whereColumn('student_id', 'students.id')

//    ->sum('amount_paid')
     ->limit(1)
     ])

     ->get();
    // //     }else{
        // $stud= student::where('students.f_name', 'like', '%' . $this->search . '%')
        // ->orWhere('students.id', 'like', '%' . $this->search . '%')
        // ->join('payments','students.id','=','payments.student_id')
        // // ->select(DB::raw('SUM(payments.amount_paid) as total_sales'))
        // ->paginate(10);
    //     $this->search=null;
    // }
        return view('livewire.student.index',['stud'=>$stud]);
    }
}
