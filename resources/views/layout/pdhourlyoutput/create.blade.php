@extends('layout.main')
@section('title','Create Data')
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
                    <li><a href="index.html">@yield('title')</a></li>
                    <li class="active">@yield('title')</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Form PDHourlyOutput</h3>
                    <!-- <p class="text-muted m-b-30 font-13"> Tolong pastikan RootCause, Issue & Actionnya jelas* </p> -->
                    <form action="{{ route('pdhourlyoutput.store') }}" class="form" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">NAME</label>
                            <div class="col-10">
                                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text" id="example-number-input">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">TIME</label>
                            <div class="col-10">
                                <input class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" type="text" id="example-number-input">
                            @error('time')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">TARGET</label>
                            <div class="col-10">
                                <input class="form-control @error('target') is-invalid @enderror" name="target" value="{{ old('target') }}" type="text" id="example-number-input">
                            @error('target')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">OUTPUT</label>
                            <div class="col-10">
                                <input class="form-control @error('output') is-invalid @enderror" name="output" value="{{ old('output') }}" type="text" id="example-number-input">
                            @error('output')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">ACCM</label>
                            <div class="col-10">
                                <input class="form-control @error('accm') is-invalid @enderror" name="accm" value="{{ old('accm') }}" type="text" id="example-number-input">
                            @error('accm')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">DATE</label>
                            <div class="col-10">
                                <input class="form-control  @error('date') is-invalid @enderror" type="date" name="date" value="{{ old('date') }} id="example-date-input">
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">DATE</label>
                            <div class="col-10">
                                <input class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" type="text" id="example-number-input">
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">PROCESS</label>
                            <div class="col-10">
                                <input class="form-control @error('process') is-invalid @enderror" name="process" value="{{ old('process') }}" type="text" id="example-number-input">
                            @error('process')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">SHIFT</label>
                            <div class="col-10">
                                <input class="form-control @error('shift') is-invalid @enderror" name="shift" value="{{ old('shift') }}" type="text" id="example-number-input">
                            @error('shift')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">LOT</label>
                            <div class="col-10">
                                <input class="form-control @error('lot') is-invalid @enderror" name="lot" value="{{ old('lot') }}" type="text" id="example-number-input">
                            @error('lot')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">DESKRIPTION</label>
                            <div class="col-10">
                                <textarea class="form-control" name="deskription" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                            {{-- <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}

{{-- <div class="row">
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
</div> --}}

{{-- END MODAL --}}

@endsection