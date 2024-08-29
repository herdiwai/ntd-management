<table id="myTable" class="table table-striped">
    <thead>
            <tr>
                <th>No</th>
                <th>PROCESS</th>
                <th>MODEL</th>
                <th>LOT</th>
                <th>SHIFT</th>
                <th>LINE</th>
                <th>TIME</th>
                <th>DATE</th>
                <th>TARGET</th> 
                <th>OUTPUT</th>
                <th>ACCM</th>
                <th>DESCRIPTION</th>
                <th>PIC</th>
                {{-- <th>ACTION</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pd)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pd->process }}</td>
                    <td>{{ $pd->model }}</td>
                    <td>{{ $pd->lot }}</td>
                    <td>{{ $pd->shift }}</td>
                    <td>{{ $pd->line }}</td>
                    <td>{{ $pd->time }}</td>
                    <td>{{ $pd->date }}</td>
                    <td>{{ $pd->target }}</td>
                    <td>{{ $pd->output }}</td>
                    <td>{{ $pd->accm }}</td>
                    <td>{{ $pd->deskription }}</td>
                    <td>{{ $pd->name }}</td>

                    {{-- <td>{{ $pd->created_at->format('Y-m-d') }}</td> --}}
                    {{-- <td> --}}
                        {{-- <a href="{{ route('pdhourlyoutput.edit', $pd->id) }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect'> <i class="ti-pencil-alt"></i> Edit </a> --}}
                        {{-- <a href="{{ route('pdhourlyoutput.destroy', $pd->id) }}" class='fcbtn btn btn-danger btn-outline btn-1b waves-effect' onclick="return confirm('Are You Sure?')"> <i class="ti-pencil-alt"></i> Hapus </a> --}}
                        {{-- <form class="d-inline-block" action="{{ route('pdhourlyoutput.destroy', $pd->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class='fcbtn btn btn-danger btn-outline btn-1b waves-effect' onclick="return confirm('Are You Sure?')"> <i class="ti-eraser"></i> Delete </button>
                        </fornm> --}}
                    {{-- </td> --}}
                </tr>
            @endforeach 
        </tbody>
    </table>