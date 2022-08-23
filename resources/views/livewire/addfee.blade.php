<div>
    {{-- The whole world belongs to you. --}}
    {{-- <form wire:submit.prevent="update"> --}}

        <div class="row">
            <div class="col">
                <label for="" class="form-label"> Select Student</label>
                {{-- wire:click="transaction({{$stud->id}})" --}}

                  <input   type="text" placeholder="Search result with name or Serial_number" class="form-control" wire:model="search">
@if (empty($student_record))

@else
@foreach ($student_record as $stud)


<button class="btn"  wire:click="transaction({{ $stud->id }}, '{{ $stud->f_name }}')">

    {{$stud->id}} &erarr; {{$stud->f_name}}: <strong>Father&erarr;</strong>  {{$stud->father}} </button><br>


  {{-- <option  selected value="{{$stud->id}}">{{$stud->f_name}}</option> --}}


  @endforeach
@endif


                  {{-- <select   wire:model="student" name="student" class="form-select" aria-label="Default select example">
                    <option value="">select Student</option>

                  @foreach ($student_record as $stud)




                    <option  selected value="{{$stud->id}}">{{$stud->f_name}}</option>


                    @endforeach
                                      </select> --}}

            </div>
            {{-- <div> --}}

                @if (empty($transaction_data))

                @else

                @foreach ($transaction_data as $stud)

                <div class="col">
                    <label  for="" class="form-label"> Course Due Fees {{-- {{$stud->course_fee-$stud->deposit_fee}} --}}
                    </label>
                    <input class="form-control" type="text" value="{{$stud->course_name}}">

                    {{-- <select    name="student" class="form-select" aria-label="Default select example">
                        {{-- <option value="">select Student</option> --}}

                        {{-- <option   value="{{$stud->course_id}}">{{$stud->course_name}}</option> --}}


                        {{-- </select> --}}


                    </div>


                </div>


            {{-- </div> --}}

        <div class="clearfix " style="visibility: hidden" >.</div>

<div class="row">
    <div class="col">
        <label for="" class="form-label"> Enter Amount</label>
        <select   name="" id="" required readonly>
            {{-- <option value="">select due amount</option> --}}
                <option value="{{$stud->course_fee-$stud->deposit_fee}}">{{$stud->course_fee-$stud->deposit_fee}}</option>
            </select>

            <form wire:submit.prevent="store()">

<input type="number" wire:model.defer="fee"  class="form-control">
</form>
    </div>
</div>
@endforeach
@endif



    <div class="clearfix " style="visibility: hidden" >.</div>

    <footer  class="w3-container w3-teal w3-padding-16 w3-white">

        <button type="button" class="btn btn-secondary fl-right " onclick="document.getElementById('id02').style.display='none'" style="padding: 1%">Close</button>
        <button type="submit" class="btn btn-primary fl-right" style="padding: 1%;margin-right:2%"  >submit</button>
    </footer>


{{-- </form> --}}
</div>
