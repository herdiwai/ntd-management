

@extends('layout.main')
@section('title','Production Hourly Output')
@section('content')


{{-- @section('modal')
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Create Data</h4>
            </div>
            <form action="{{ route('pdhourlyoutput.store') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group row">
                        <label @error('name') for="example-number-input" class="col-2 col-form-label text-danger" 
                        @enderror>Production Name @error('name') | {{ $message }} @enderror
                        </label>
                        <div class="col-10">
                            <input class="form-control" name="name" value="{{ old('name') }}" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Time</label>
                        <div class="col-10">
                            <input class="form-control" name="time" type="text" id="example-number-input">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Target</label>
                        <div class="col-10">
                            <input class="form-control" name="target" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Output</label>
                        <div class="col-10">
                            <input class="form-control" name="output" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">ACCM</label>
                        <div class="col-10">
                            <input class="form-control" name="accm" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Date</label>
                        <div class="col-10">
                            <input class="form-control" name="date" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Process</label>
                        <div class="col-10">
                            <input class="form-control" name="process" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Shift</label>
                        <div class="col-10">
                            <input class="form-control" name="shift" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-2 col-form-label">Lot</label>
                        <div class="col-10">
                            <input class="form-control" name="lot" type="text" id="example-number-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Description</label>
                        <div class="col-10">
                            <textarea class="form-control" name="deskription" rows="5"></textarea>
                        </div>
                    </div>

                </div>
           
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection --}}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">@yield('title')</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                {{-- <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a> --}}
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('/pdhourlyoutput') }}">@yield('title')</a></li>
                    {{-- <li class="active">@yield('title')</li> --}} 
                    &nbsp;
                    <button class="btn btn-primary"> <a href="{{ route('pdhourlyoutput.create') }}"> <i class="fa fa-plus-circle"></i> ADD DATA </button> </a>
                </ol>
               
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="white-box button-box">
                <!-- <h3 class="m-b-0 box-title">Outline Buttons </h3>
                    <p class="text-muted m-b-30">Use a classes <code>btn btn-default btn-outline</code>to quickly create a Outline btn.</p> -->
             
                        {{-- <a href="{{ route('pdhourlyoutput.create') }}"> </a> --}}
                        {{-- <div class="col-lg-2 col-sm-2 col-xs-12"> --}}
                            {{-- <button class="btn btn-block btn-outline btn-info waves-effect" data-toggle="modal" data-target="#responsive-modal">  <i class="ti-hand-point-up"></i> ADD DATA </button> --}}
                            {{-- <button class="btn btn-block btn-outline btn-info waves-effect"> <a href="{{ route('pdhourlyoutput.create') }}"> <i class="ti-hand-point-up"></i> ADD DATA </button> </a> --}}
                        {{-- </div> --}}
                        {{-- <div class="col-lg-2 col-sm-2 col-xs-12">
                            <button class="btn btn-block btn-outline btn-primary waves-effect" ><i class="ti-view-list-alt"></i> VIEW PDF </button> 
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-12">
                            <button class="btn btn-block btn-outline btn-success waves-effect" ><i class="ti-download"></i> DOWNLOAD PDF </button>
                        </div> --}}
                        <!-- <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-outline btn-danger waves-effect">Danger</button>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-outline btn-warning waves-effect">Warning</button>
                        </div> -->
        
                    {{-- <h3 class="m-b-0 m-t-30 box-title"></h3>
                        <p class="text-muted m-b-30"></p> --}}
                       


                    <div class="row">

                        <form action="{{ route('export.excel') }}" method="GET">
            
                            <select class="btn btn-secondary btn-sm" id="inlineFormCustomSelect" name="shift">
                                <option value="">Select Lot</option>
                                @foreach($lot as $lot)
                                    <option value="{{ $lot }}" {{ old('lot') == $lot ? 'selected' : '' }}>{{ $lot }}</option>
                            @endforeach
                            </select>
                            &nbsp;
                
                            <select class="btn btn-secondary btn-sm" id="inlineFormCustomSelect" name="shift">
                                <option value="">Select Shift</option>
                                @foreach($shift as $shift)
                                    <option value="{{ $shift }}" {{ old('shift') == $shift ? 'selected' : '' }}>{{ $shift }}</option>
                            @endforeach
                            </select>
                            &nbsp;

                            <select class="btn btn-secondary btn-sm" id="inlineFormCustomSelect" name="line">
                                <option value="">Select Line</option>
                                @foreach($line as $line)
                                    <option value="{{ $line }}" {{ old('line') == $line ? 'selected' : '' }}>{{ $line }}</option>
                            @endforeach
                            </select>
                            &nbsp;
                
                            <select class="btn btn-secondary btn-sm" id="inlineFormCustomSelect" name="model">
                                <option value="">Select Model</option>
                                @foreach($model as $models)
                                    <option value="{{ $models }}" {{ old('model') == $models ? 'selected' : '' }}>{{ $models }}</option>
                            @endforeach
                            </select>
                            &nbsp;
                
                            <label for="start_date" >Start Date:</label>
                            <input type="date" class="btn btn-secondary btn-sm" name="start_date" id="start_date" required>
                        
                            <label for="end_date">End Date:</label>
                            <input type="date" class="btn btn-secondary btn-sm" name="end_date" id="end_date" required>
                            &nbsp;
                            <button type="submit" class="btn btn-success"><i class="ti-download"></i> Export to Excel</button>

                            <a href="{{ url('/pdhourlyoutput') }}" class="btn btn-danger">Refresh</a>
                            
    
                        </form>

                       


                            <!-- Filter by date -->
                        {{-- <form action="/filter" class="form" method="GET">
                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Start Date</label>
                            <div class="col-8">
                                    <input class="form-control" type="date" name="start_date" value="{{ Request()->start_date }}" id="example-date-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">End Date</label>
                            <div class="col-8">
                                    <input class="form-control" type="date" name="end_date" value="{{ Request()->end_date }}" id="example-date-input">
                                </div>
                            </div>
                            <button type="submit" class='btn btn-primary'> <i class=""></i> Filter </button>
                            <a href="{{ url('/pullstrengthtest') }}" class="btn btn-success">Reset</a> --}}
                            {{-- <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refresh</button> --}}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>

       
        {{-- <a href="{{ url('pdhourlyoutput/export/excel?start_date='.Request()->start_date.'&end_date='.Request()->end_date) }}" class="fcbtn btn btn-success btn-outline btn-1b waves-effect"> <i class="ti-download"></i> Download Excel</a>
        <form action="{{ url('pdhourlyoutput/export/excel') }}" method="get">
            <input type="hidden" name="start_date" value="{{ Request()->start_date }}">
            <input type="hidden" name="end_date" value="{{ Request()->end_date }}">
        </form> --}}
       
        <br>
        <br>
        <!-- Table Production Hourly Output -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    {{-- <div class="col-md-8 text-end">
                        <div class="button-group">
                            <button class="btn btn-primary btn-sm"> <a href="{{ route('pdhourlyoutput.create') }}"> <i class="fa fa-plus-circle"></i> ADD DATA </button> </a>
                            <button class="btn btn-primary btn-sm"> <a href="{{ url('pdhourlyoutput/export/excel') }}"> <i class="ti-download"></i> Download Excel </button> </a>
                        </div>
                    </div> --}}
                    <!-- <div class="row">
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default waves-effect" a href="{{ route('pdhourlyoutput.create') }}" > ADD DATA</button> </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default waves-effect" a href="#" > VIEW PDF </button> </a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default waves-effect" a href="#" > DOWNLOAD PDF </button> </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            
                        <div>
                    </div> -->

                <!-- <div class="m-b-30">
                    <a href="{{ route('pdhourlyoutput.create') }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect'> <i class="fas fa-pen"> ADD DATA </a>
                </div> -->
                <!-- @if (strpos(url()->current(), 'pdf') == false)
                    <div class="m-b-30">
                        <a href="{{ url('pdhourlyoutput/view/pdf') }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect'> <i class="fas fa-pen"> View PDF </a>
                    </div>
                    <div class="m-b-30">
                        <a href="{{ url('pdhourlyoutput/download/pdf') }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect'> <i class="fas fa-pen"> Download PDF </a>
                    </div>
                @endif -->
                
                    <!-- <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p> -->
                    <div class="table-responsive">

                    @if (Session('success'))
                        <div class="alert alert-success">{{ Session('success') }}</div>
                    @endif
                    @if (Session('updated'))
                        <div class="alert alert-success">{{ Session('updated') }}</div>
                    @endif
                    <table id="myTable" class="table table-striped">
                        <thead>
                                <tr>
                                    <th>No</th>
                                    <th>DATE</th>
                                    <th>PROCESS</th>
                                    <th>MODEL</th>
                                    <th>LOT</th>
                                    <th>SHIFT</th>
                                    <th>LINE</th>
                                    <th>TIME</th>
                                    <th>TARGET</th> 
                                    <th>OUTPUT</th>
                                    <th>ACCM</th>
                                    <th>DESCRIPTION</th>
                                    <th>PIC</th>
                                    {{-- <th>ACTION</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $pd)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $pd->date }}</td>
                                        <td>{{ $pd->process }}</td>
                                        <td>{{ $pd->model }}</td>
                                        <td>{{ $pd->lot }}</td>
                                        <td>{{ $pd->shift }}</td>
                                        <td>{{ $pd->line }}</td>
                                        <td>{{ $pd->time }}</td>
                                        <td>{{ $pd->target }}</td>
                                        <td>{{ $pd->output }}</td>
                                        <td>{{ $pd->accm }}</td>
                                        <td>{{ $pd->deskription }}</td>
                                        <td>{{ $pd->name }}</td>
                    
                                        {{-- <td>{{ $pd->created_at->format('Y-m-d') }}</td> --}}
                                        {{-- <td>
                                            <a href="{{ route('pdhourlyoutput.edit', $pd->id) }}" class='fcbtn btn btn-primary btn-outline btn-1b waves-effect'> <i class="ti-pencil-alt"></i> Edit </a> --}}
                                            {{-- <a href="{{ route('pdhourlyoutput.destroy', $pd->id) }}" class='fcbtn btn btn-danger btn-outline btn-1b waves-effect' onclick="return confirm('Are You Sure?')"> <i class="ti-pencil-alt"></i> Hapus </a> --}}
                                            {{-- <form class="d-inline-block" action="{{ route('pdhourlyoutput.destroy', $pd->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class='fcbtn btn btn-danger btn-outline btn-1b waves-effect' onclick="return confirm('Are You Sure?')"> <i class="ti-eraser"></i> Delete </button>
                                            </fornm>
                                        </td> --}}
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>

                        {{-- @include('layout.pdhourlyoutput.table', $data) --}}
                         
                    </div>
                </div>
            </div>
    </div>
</div>


<!-- sample modal content -->
<!-- /.modal -->

{{-- <img src="../plugins/images/model.png" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive" /> --}}
<!-- Button trigger modal -->

@endsection

{{-- @push('after-scripts')

<script>
    
<script>
     $('.sa-warning').click(function(){
            swal({   
                title: "Are you sure?",   
                text: "You will not be able to recover this imaginary file!",   
                type: "warning",   
                showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, delete it!",   
                closeOnConfirm: false 
            }, function(){   
                swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
            });
        });
</script>
</script>

@endpush --}}