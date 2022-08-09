<div class="table-responsive-lg">
    <table class="table">
        <caption>Total Course
{{$test}}
<div>
    {{-- {{ $message }} --}}



</div>
        </caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Course Name</th>
            <th scope="col">Fee</th>
            <th scope="col">Duration</th>
            <th scope="col">More_info</th>

            <th scope="col">Action</th>

            {{-- <th scope="col">MoreInfo</th> --}}


          </tr>
        </thead>
        <tbody>
            @forelse ( $data as $row )
            <tr>
                <td>{{$loop->index + 1}}</td>


                    <td>
                       {{$row->course_name}}
                      </td>
                    <td>{{$row->course_fee}}</td>
                    <td>
                        {{$row->duration}}
                    </td>
                    <td>

                        {{$row->more_info}}
                    </td>

                <td><button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button>

                    <button  wire:click="edit({{$row->id}})"  type="button" class="btn btn-sm btn-outline-primary py-0" >
                        edit
                        <button onclick="document.getElementById('id01').style.display='block'"
                        class="btn btn-sm btn-outline-primary py-0">Open</button>
                      </button>

                      <!-- Trigger/Open the Modal -->

                          @include("livewire.course.edit")



                </td>


            </tr>

            @empty
<tr>
    <td></td>
    <td></td>
    <td> no data found</td>
    <td></td>
    <td></td><td></td>

</tr>
            @endforelse





        </tbody>
    </table>
  </div>
