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
            <th scope="col">Duration</th>
            <th scope="col">Fee</th>
            <th scope="col">Action</th>

            {{-- <th scope="col">MoreInfo</th> --}}


          </tr>
        </thead>
        <tbody>
            @forelse ( $data as $row )
            <tr>
                <td>{{$loop->index + 1}}</td>
                <form method="POST" action="{{ route('regist/store') }}">

                    <td>
                        <input class="form-control" type="text" name="data" value=" {{$row->course_name}}">
                      </td>
                    <td>{{$row->course_fee}}</td>
                    <td>
                        {{$row->duration}}
                    </td>
                </form>

                <td><button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button>
                    <button wire:click="edit({{$row->id}})" class="btn btn-sm btn-outline-primary py-0">edit</button></td>
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
