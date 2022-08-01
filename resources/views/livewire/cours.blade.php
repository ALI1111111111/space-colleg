<div class="table-responsive-lg">
    <table class="table">
        <caption>List of users</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Course Name</th>
            <th scope="col">Duration</th>
            <th scope="col">Fee</th>
            <th scope="col">MoreInfo</th>

          </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$row->course_name}}</td>
                <td>{{$row->course_fee}}</td>
                <td>
                    {{$row->duration}}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
  </div>
