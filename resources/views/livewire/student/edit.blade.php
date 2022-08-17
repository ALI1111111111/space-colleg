<div>


     <input placeholder="Search something....."  type="text" wire:model="search" class="form-control">



@if (empty($course_data))

@else
@foreach ($course_data as $d)

{{-- wire:click="increasing({{$d->id}})"> --}}
<a class="btn " href="{{ url('student', ['id' => $d['id']]) }}">{{$d->f_name}}</a><br>



        @endforeach
@endif




@if (empty($data))

@else
@foreach ($data as $d)
<input type="text" value="{{$d->father}}" >


@endforeach

@endif
{{-- {{$course_data}} --}}

</div>
