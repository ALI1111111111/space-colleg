<div>

    <input type="text" placeholder="Search result with name or Serial_number" class="form-control" wire:model="search"
        value="{{ $search }}">
    <table class="table">
        <thead>
            <div class="clearfix"></div>


            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Name</th>
                <th scope="col">Father</th>
                <th scope="col">Due Fees</th>
                <th scope="col"> Learning-status </th>
                <th scope="col"> More_info </th>


            </tr>
        </thead>
        <tbody>
            @forelse ($stud as $row)
                <tr>
                    {{-- {{$row}} --}}
                    <td> {{ $row->sid }} </td>
                    <td> {{ $row->f_name }} </td>
                    <td>{{ $row->father }}</td>
                    <td>{{$row->course_fee-$row->deposit_fee}}</td>
                    <td> {{$row->course_status }} </td>
                    <td>
                         {{-- <a class="btn btn-primary" href="{{ url('/student?search=', ['search' => $row['f_name']]) }}">profile </a> --}}

                <a class="btn btn-primary" href="/student/{{$row->sid}}?search={{$row->f_name}}">profile </a>
                        </td>
                </tr>
            @empty
            @endforelse


        </tbody>
    </table>
    {{$stud->links()}}


</div>
