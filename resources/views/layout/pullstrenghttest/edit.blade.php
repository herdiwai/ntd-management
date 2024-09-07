@extends('layout.main')
@section('title','Form Input Data Pull Strength Test')
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
                    {{-- <h3 class="box-title m-b-0">Form PDHourl yOutput</h3> --}}
                    <!-- <p class="text-muted m-b-30 font-13"> Tolong pastikan RootCause, Issue & Actionnya jelas* </p> -->
                    <form action="{{ route('pullstrengthtest.update', $data->id) }}" class="form" method="POST">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">DATE</label>
                            <div class="col-10">
                                <input class="form-control  @error('date') is-invalid @enderror" type="date" name="date" value="{{ $data->date }}" id="example-date-input">
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">STATION</label>
                            <div class="col-sm-12">
                                <select class="custom-select col-10" id="inlineFormCustomSelect" name="station">
                                    <option value="">---select station---</option>
                                    @foreach($station as $process)
                                        <option value="{{ $process }}" {{ $process == $data->station ? 'selected' : '' }}>
                                            {{ $process }}
                                        </option>
                                @endforeach
                                </select>
                            @error('station')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">MODEL</label>
                            <div class="col-sm-12">
                                <select class="custom-select col-10" id="inlineFormCustomSelect" name="model">
                                    <option value="">---select model---</option>
                                    @foreach($model as $models)
                                    <option value="{{ $models }}" {{ $models == $data->model ? 'selected' : '' }}>
                                        {{ $models }}
                                    </option>
                                @endforeach
                                </select>
                            @error('model')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">LOT</label>
                            <div class="col-sm-12">
                                <select class="custom-select col-10" id="inlineFormCustomSelect" name="lot">
                                    <option value="">---select lot---</option>
                                    @foreach($lot as $lots)
                                        <option value="{{ $lots }}" {{ $lots == $data->lot ? 'selected' : '' }}>
                                            {{ $lots }}
                                        </option>
                                    @endforeach
                                </select>
                            @error('lot')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">SHIFT</label>
                            <div class="col-sm-12">
                                <select class="custom-select col-10" id="inlineFormCustomSelect" name="shift">
                                    <option value="">---select shifts---</option>
                                    @foreach($shift as $shifts)
                                        <option value="{{ $shifts }}" {{ $shifts == $data->shift ? 'selected' : '' }}>
                                            {{ $shifts }}
                                        </option>
                                    @endforeach
                                </select>
                            @error('shift')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">LINE</label>
                            <div class="col-sm-12">
                                <select class="custom-select col-10" id="inlineFormCustomSelect" name="line">
                                    <option value="">---select line---</option>
                                    @foreach($line as $lines)
                                        <option value="{{ $lines }}" {{ $lines == $data->line ? 'selected' : '' }}>
                                            {{ $lines }}
                                        </option>
                                    @endforeach
                                </select>
                            @error('line')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">START TIME</label>
                            <div class="col-10">
                                <input class="form-control @error('time') is-invalid @enderror" value="{{ $data->start_time }}" name="start_time" type="time" id="example-time-input">
                            @error('time')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">END TIME</label>
                            <div class="col-10">
                                <input class="form-control @error('time') is-invalid @enderror" value="{{ $data->end_time }}" name="end_time" type="time" id="example-time-input">
                            @error('time')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">DESCRIPTION</label>
                            <div class="col-10">
                                <textarea class="form-control" value="{{ $data->deskcription }}" name="deskcription" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">PIC</label>
                            <div class="col-10">
                                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" type="text" id="example-number-input">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div

                        <div class="text-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><i class="ti-save"></i> SAVE</button>
                            <a href="{{ url('/pullstrengthtest') }}" type="submit" class="btn btn-inverse waves-effect waves-light"><i class="ti-back-left"></i> BACK</a>
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