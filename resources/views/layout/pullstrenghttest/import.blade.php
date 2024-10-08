@extends('layout.main')
@section('title','Form Excel Pull Strength Test')
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
            <button class="fcbtn btn btn-success btn-outline btn-1b waves-effect"> <a href="{{ url("pullstrengthtest/export") }}"> <i class="fa fa-plus-circle"></i> DOWNLOAD Xlsx</button> </a>
        &nbsp; &nbsp;

        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="white-box">
                    {{-- <h3 class="box-title m-b-0">Form PDHourl yOutput</h3> --}}
                    <!-- <p class="text-muted m-b-30 font-13"> Tolong pastikan RootCause, Issue & Actionnya jelas* </p> -->
                    <form action="{{ route('pullstrengthtest.store') }}" class="form" method="POST">
                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label class="form-label">Xlsx File Import</label>
                            <input type="file" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label class="form-label">Xlsx File Import</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                <div class="custom-file">
                                    <input type="file" name="import_file" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Xlsx File Import</label>
                            <div class="col-10">
                                <input class="form-control" name="import_file" type="file">
                            </div>
                        </div --}}

                        <div class="text-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><i class="ti-save"></i> UPLOAD</button>
                            {{-- <a href="{{ url('/pullstrengthtest') }}" type="submit" class="btn btn-inverse waves-effect waves-light"><i class="ti-back-left"></i> BACK</a> --}}
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