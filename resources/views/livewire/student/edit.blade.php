<div>
    <select  required  wire:model="course_id" class="form-select" wire:click="increasing()" aria-label="Default select example">
        <option value="">Select course</option>
        @foreach ($course_data as $d)
        <option  required value="{{$d->id}}"> {{$d->course_name}} {{$d->course_fee}}

        @endforeach
      </option>

    </select>
{{$student}}
</div>
