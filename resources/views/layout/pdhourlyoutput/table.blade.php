<table id="myTable" class="table table-striped">
    <thead>
            <tr>
                <th>No</th>
                <th>NAME</th>
                <th>TIME</th>
                <th>TARGET</th>
                <th>OUTPUT</th>
                <th>ACCM</th>
                <th>DATE</th>
                <th>PROCESS</th> 
                <th>SHIFT</th>
                <th>LOT</th>
                <th>DESKRIPTION</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pd)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pd->name }}</td>
                    <td>{{ $pd->time }}</td>
                    <td>{{ $pd->target }}</td>
                    <td>{{ $pd->output }}</td>
                    <td>{{ $pd->accm }}</td>
                    <td>{{ $pd->date }}</td>
                    <td>{{ $pd->process }}</td>
                    <td>{{ $pd->shift }}</td>
                    <td>{{ $pd->lot }}</td>
                    <td>{{ $pd->deskription }}</td>

                    {{-- <td>{{ $pd->created_at->format('Y-m-d') }}</td> --}}
                    {{-- <td>
                        <a href="{{ route('pdhourlyoutput.edit', $pd->id) }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect'> <i class="ti-pencil-alt"></i> Edit </a>
                        <a href="{{ route('pdhourlyoutput.destroy', $pd->id) }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect' onclick="return confirm('Are You Sure?')"> <i class="ti-pencil-alt"></i> Hapus </a>
                        <form action="{{ route('pdhourlyoutput.destroy', $pd->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class='fcbtn btn btn-danger btn-outline btn-1b waves-effect'> <i class="ti-eraser"></i> Delete </button>
                        </fornm>
                    </td> --}}
                </tr>
            @endforeach 
        </tbody>
    </table>