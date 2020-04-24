@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<h3 class="page-title">File Uploads</h1>
@endsection

@section('content')
       <div class="page-content-wrapper">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Dropzone</h4>

                                            <div class="m-b-30">
                          {{ Form::open(array('url' =>'item-img','method'=>'post','class'=>'dropzone')) }} 
                                                
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                       {{ Form::close() }}
                                       <div class="text-center m-t-15">
                                           <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                       </div>
                                            </div>
                                            <div class="text-center m-t-15">
                                                <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div><!-- container -->
        </div> <!-- Page content Wrapper -->
@endsection

@section('script')
<!-- Dropzone js -->

<script src="{{URL::asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>
@endsection

