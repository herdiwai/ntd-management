@extends('layout.main')
@section('title','Edit Data')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">@yield('title')</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                {{-- <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a> --}}
                <ol class="breadcrumb">
                    <li><a href="">@yield('title')</a></li>
                    <li class="active">@yield('title') </li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Form EDIT PDHourlyOutput</h3>
                    <!-- <p class="text-muted m-b-30 font-13"> Tolong pastikan RootCause, Issue & Actionnya jelas* </p> -->
                    <form action="{{ route('pdhourlyoutput.update' , $data->id) }}" class="form" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-12">PROCESS</label>
                            <div class="col-sm-12">
                                <select class="custom-select col-10" id="inlineFormCustomSelect" name="process">
                                    <option value="">---select process---</option>
                                    @foreach($process as $process)
                                        <option value="{{ $process }}" {{ old('process') == $process ? 'selected' : '' }}>{{ $process }}</option>
                                @endforeach
                                </select>
                            @error('process')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Production Name</label>
                            <div class="col-10">
                                <input class="form-control" name="name" value="{{ $data->name }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Time</label>
                            <div class="col-10">
                                <input class="form-control" name="time" value="{{ $data->time }}" type="text" id="example-number-input">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Target</label>
                            <div class="col-10">
                                <input class="form-control" name="target" value="{{ $data->target }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Output</label>
                            <div class="col-10">
                                <input class="form-control" name="output" value="{{ $data->output }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">ACCM</label>
                            <div class="col-10">
                                <input class="form-control" name="accm" value="{{ $data->accm }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Date</label>
                            <div class="col-10">
                                <input class="form-control" name="date" value="{{ $data->date }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Process</label>
                            <div class="col-10">
                                <input class="form-control" name="process" value="{{ $data->process }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Shift</label>
                            <div class="col-10">
                                <input class="form-control" name="shift" value="{{ $data->shift }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Lot</label>
                            <div class="col-10">
                                <input class="form-control" name="lot" value="{{ $data->lot }}" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Description</label>
                            <div class="col-10">
                                <textarea class="form-control" name="deskription" value="{{ $data->deskription }}" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}

    <div class="row">
        <div class="col-md-4">
            <div class="white-box">
                <h3 class="box-title">Responsive model</h3>
                <!-- sample modal content -->
                <!-- /.modal -->
                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Modal Content is Responsive</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="../plugins/images/model.png" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive" />
                <!-- Button trigger modal -->
            </div>
        </div>
    </div>

 {{-- END MODAL --}}
 
 
@endsection