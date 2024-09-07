<table id="myTable" class="table table-striped">
    <thead>
            <tr>
                <th>No</th>
                <th>DATE</th>
                <th>STATION</th>
                <th>MODEL</th>
                <th>LOT</th>
                <th>SHIFT</th>
                <th>LINE</th>
                <th>START_TIME</th>
                <th>END_TIME</th> 
                <th>DESKCRIPTION</th>
                <th>PIC</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $qc)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $qc->date }}</td>
                    <td>{{ $qc->station }}</td>
                    <td>{{ $qc->model }}</td>
                    <td>{{ $qc->lot }}</td>
                    <td>{{ $qc->shift }}</td>
                    <td>{{ $qc->line }}</td>
                    <td>{{ $qc->start_time }}</td>
                    <td>{{ $qc->end_time }}</td>
                    <td>{{ $qc->deskcription }}</td>
                    <td>{{ $qc->name }}</td>
                    {{-- <td>{{ $qc->created_at->format('Y-m-d') }}</td> --}}
                    <td>
                        <a href="{{ route('pullstrengthtest.edit', $qc->id) }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect'> <i class="ti-pencil-alt"></i> Edit </a>
                        {{-- <a href="{{ route('pullstrengthtest.destroy', $qc->id) }}" class='fcbtn btn btn-danger btn-outline btn-1b waves-effect' onclick="return confirm('Are You Sure?')"> <i class="ti-pencil-alt"></i> Hapus </a> --}}
                        <form class="d-inline-block" action="{{ route('pullstrengthtest.destroy', $qc->id) }}" method="POST"> 
                            @method('DELETE')
                            @csrf
                            <button type="submit" class='fcbtn btn btn-danger btn-outline waves-effect' onclick="return confirm('Are You Sure?')"> <i class="ti-eraser"></i> Delete </button>
                        </fornm> 
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>