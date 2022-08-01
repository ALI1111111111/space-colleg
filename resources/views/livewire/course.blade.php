<div class="table-responsive-lg">
    <table class="table">
        <caption>Total Course
{{$test}}

        </caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Course Name</th>
            <th scope="col">Duration</th>
            <th scope="col">Fee</th>
            {{-- <th scope="col">MoreInfo</th> --}}

          </tr>
        </thead>
        <tbody>
            @forelse ( $data as $row )
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$row->course_name}}</td>
                <td>{{$row->course_fee}}</td>
                <td>
                    {{$row->duration}}
                </td>
                <td><button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button></td>
            </tr>

            @empty
<tr>
    <td></td>
    <td></td>
    <td> no data found</td>
    <td></td>

</tr>
            @endforelse
            


        </tbody>
    </table>
  </div>
