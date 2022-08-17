<div>


     <input placeholder="Search something....."  type="text" wire:model="search" class="form-control">



@if (empty($course_data))

@else
@foreach ($course_data as $d)

{{-- wire:click="increasing({{$d->id}})"> --}}
<button class="btn" wire:click="increasing({{$d->id}})" >{{$d->f_name}}</button>
{{-- <a class="btn " href="{{ url('student', ['id' => $d['id']]) }}">{{$d->f_name}}</a><br> --}}



        @endforeach
@endif




@if (empty($data))

@else
@foreach ($data as $d)
{{$data}}
<div class="row">
    <div class="col">
        <input  type="text"  class="form-control" name="f-name" placeholder="Enter full Name"   >
{{-- {{$f_name}} --}}
    </div>
    <div class="col">
        <input type="text"  class="form-control" name="father" placeholder="Enter Father Name"  >

    </div>

</div>
<div class="clearfix" style="visibility: hidden" >.</div>
<div class="row">
    <div class="col">
        <select     class="form-select" aria-label="Default select example">
            <option>{{$d->course_name}}</option>
            @foreach ($course as $c_d)
            <option   value="{{$c_d->id}}"> {{$c_d->course_name}} {{$c_d->course_fee}}

            @endforeach
          </option>

        </select>


    </div>
    <div class="col">
        <input    type="number" name="fee" class="form-control" placeholder="Deposit-Fee">
    </div>

</div>
<div class="clearfix" style="visibility: hidden" >.</div>

<div class="row">
<div class="col">
<label  style="visibility: hidden"  for="adm">cnic</label>

<input  type="number" name="cnic" placeholder="Enter cnic" class="form-control">
</div>
<div class="col">
<label  for="adm">Admmission_date</label>
<input    type="date" id="adm" name="adm_date" class="form-control">
</div>
</div>
<div class="clearfix" style="visibility: hidden" >.</div>

<div class="row">
<div class="col">
<select   class="form-select" aria-label="Default select example">
<option value="">Select Timming</option>
<option value="1 - 2">1 - 2 </option>
<option value="2 - 3">2 - 3</option>
<option value="3 - 4">3 - 4</option>
<option value="4 - 5">4 - 5</option>
<option value="5 - 6">5 - 6</option>
<option value="6 - 7">6 - 7</option>
<option value="7 - 8">7 - 8</option>
<option value="8 - 9">8 - 9</option>
<option value="9 - 10">9 - 10 </option>
<option value="10 - 11">10 - 11</option>
<option value="11 - 12">11 - 12</option>
<option value="12 - 1">12 - 1</option>
</select>
</div>
<div class="col">
<select    class="form-select" aria-label="Default select example">
<option value="">Select Session</option>
<option value="AM">AM</option>
<option value="PM">PM</option>
</select>
</div>
</div>
<div class="clearfix" style="visibility: hidden" >.</div>

<div class="row">
<div class="col">
<label for="birth">Enter Date of Birth</label>
<input   id="birth" type="date" name="birth" class="form-control">
</div>
<div class="col">
<label  style="visibility: hidden"  for="adm">Select gender</label>

<select    class="form-select" aria-label="Default select example">
<option value="">Gender</option>
<option  value="male">Male</option>
<option value="female">Female</option>
</select>

</div>
</div>
<div class="clearfix" style="visibility: hidden" >.</div>

<div class="row">
<div class="col">
<input   placeholder="Enter Address" type="text" name="address" class="form-control" >
</div>
<div class="col">
<input  type="text" name="more_info" placeholder="More_info" class="form-control">
</div>
</div>

</div>

@endforeach

@endif
{{-- {{$course_data}} --}}

</div>
