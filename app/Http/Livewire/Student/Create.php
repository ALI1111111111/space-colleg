<?php

namespace App\Http\Livewire\Student;

use App\Models\course;
use App\Models\student;
use App\Models\Transaction;
use App\Models\payment;

use Illuminate\Support\Facades\DB;





use Livewire\Component;

class Create extends Component
{

    public $f_name, $father, $course_id, $deposit_fee, $cnic, $adm_date, $timing, $session, $birth, $gender, $address, $more_info, $dat;

    public function resetInput()
    {
        $this->f_name = null;
        $this->father = null;
        // $this->course_id =null;
        $this->deposit_fee =null;
        $this->cnic =null;
        $this->adm_date =null;
        $this->timing =null;
        $this->session =null;
        $this->birth =null;
        $this->gender =null;
        $this->address =null;
        $this->more_info =null;
        $this->dat =null;


    }

    public function store()
    {
        // store student info
        $stor= new student();
        $stor->f_name =    $this->f_name ;
        $stor->father =   $this->father ;
        //
        // $this->deposit_fee =null;
        $stor->cnic= $this->cnic;
        $stor->Adm_date =  $this->adm_date ;
        $stor->class_time= $this->timing .$this->session ;
        $stor->birth =$this->birth ;
        $stor->gender=  $this->gender;
        $stor->address=$this->address;
       $stor->more_info= $this->more_info;
       $stor->save();

    //    store Transaction datab
    $st_id = DB::table('students')
    ->orderBy('id', 'desc')
    ->first() ;
    $this->emit('user_registerd');

$tran= new Transaction();
$tran->student_id=  $st_id->id;
$tran->course_id =$this->course_id;
$tran->deposit_fee = $this->deposit_fee;
$tran->adm_date = $this->adm_date;
$tran->course_status = "Learning";
$tran->payment_status = "Partial";
$tran->payment_due_date = date('Y/m/d',strtotime('+30 days',strtotime($this->adm_date)));
$tran->save();

//  Add Payment Record
$tran_id = DB::table('transactions')
->orderBy('id', 'desc')
->first();
$pay = new payment();
$pay->transaction_id =$tran_id->id;
$pay->amount_paid = $this->deposit_fee;
$pay->save();
$this->resetInput();

$this->dat=$st_id->id;

        // $this->dat =null;
    }
    public function render()
    {
        $this->data = course::all();

        return view('livewire.student.create');
    }
}
