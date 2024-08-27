

@extends('layout.main')
@section('title','Production hourly output')
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
                <h4 class="page-title">Production Hourly Output</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                {{-- <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a> --}}
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('/pdhourlyoutput') }}">@yield('title')</a></li>
                    <li class="active">@yield('title')</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="white-box button-box">
                <!-- <h3 class="m-b-0 box-title">Outline Buttons </h3>
                    <p class="text-muted m-b-30">Use a classes <code>btn btn-default btn-outline</code>to quickly create a Outline btn.</p> -->
                    <div class="row">
                        {{-- <a href="{{ route('pdhourlyoutput.create') }}"> </a> --}}
                        <div class="col-lg-2 col-sm-2 col-xs-12">
                            {{-- <button class="btn btn-block btn-outline btn-info waves-effect" data-toggle="modal" data-target="#responsive-modal">  <i class="ti-hand-point-up"></i> ADD DATA </button> --}}
                            <button class="btn btn-block btn-outline btn-info waves-effect"> <a href="{{ route('pdhourlyoutput.create') }}"> <i class="ti-hand-point-up"></i> ADD DATA </button> </a>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-12">
                            <button class="btn btn-block btn-outline btn-primary waves-effect" ><i class="ti-view-list-alt"></i> VIEW PDF </button> 
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-12">
                            <button class="btn btn-block btn-outline btn-success waves-effect" ><i class="ti-download"></i> DOWNLOAD PDF </button>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-12">
                            <button class="btn btn-block btn-outline btn-primary waves-effect"> <a href="{{ url('pdhourlyoutput/export/excel') }}"> <i class="ti-hand-point-up"></i> Download Excel </button> </a>
                        </div>
                        <!-- <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-outline btn-danger waves-effect">Danger</button>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-outline btn-warning waves-effect">Warning</button>
                        </div> -->
                    </div>
                    <h3 class="m-b-0 m-t-30 box-title"></h3>
                        <p class="text-muted m-b-30"></p>
                    <div class="row">
                            <!-- Filter by date -->
                        <form action="/filter" class="form" method="GET">
                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Start Date</label>
                            <div class="col-8">
                                    <input class="form-control" type="date" name="start_date" id="example-date-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">End Date</label>
                            <div class="col-8">
                                    <input class="form-control" type="date" name="end_date" id="example-date-input">
                                </div>
                            </div>
                            <button type="submit" class='btn btn-primary btn-sm'> <i class="ti-filter"></i> Filter </button>
                            {{-- <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refresh</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Table Production Hourly Output -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
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
                        <div class="alert alert-info">{{ Session('success') }}</div>
                    @endif

                        @include('layout.pdhourlyoutput.table', $data)

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