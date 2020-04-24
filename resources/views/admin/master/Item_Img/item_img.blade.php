@extends('layouts.master')

@section('css')
<!-- DataTables

validation jequery/php -->
<link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
<link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/magnific-popup/magnific-popup.css') }}">
@endsection


@section('breadcrumb')
<h3 class="page-title">Images of Product</h1>
@endsection

@section('content')

                <!--  Modal content for the above example -->
                <div class="modal fade" tabindex="-1" id="catmodel" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Brand From</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                    <!-- <form class="" action="#"> -->
                        {{ Form::open(array('url' =>'item-img','method'=>'post','class'=>'dropzone')) }} 
                                              
                                  <div class="fallback">
                                      <input name="file" type="file" multiple="multiple">
                                  </div>
                                     {{ Form::close() }}    <!-- </form> -->
                                     <div class="text-center m-t-15">
                                         <button type="button" id="btndone" class="btn btn-primary waves-effect waves-light" >Done</button>
                                     </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

       <div class="page-content-wrapper">
                 <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Category List</h4>
                                            <p class="text-muted m-b-30 font-14"> 
                                              <button type="button" class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#catmodel"><i class="ion-plus-round"></i> Add</button><code> </code>.
                                            </p>
                                              
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th width="30%">Image</th>
                               
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                           @foreach($result as $val)     



                            <tr>
                                <td>{{$val['title']}}</td>
                                <td> 
                                          
                            <a href="{{ Storage::url($val['path'])}}" class="gallery-popup" title="{{$val['title']}}">
                                        <div class="project-item">
                                            <div class="overlay-container">
                                                <img src="{{ Storage::url($val['path'])}}"  alt="{{$val['title']}}" class="gallery-thumb-img">
                                                <div class="project-item-overlay">
                                                    <h4>{{$val['title']}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                          
                                </td>   
                            <td>
                            {{ Form::open(array('url' => 'item-img/'.$val['id'], 'method'=>'Delete')) }}

                             <button type="submit" class="listbtn"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" ><i class="mdi mdi-delete"></i> 
                            </button>             
                            {{ Form::close() }}

                            </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div><!-- container-fluid -->
                    </div> <!-- Page content Wrapper -->
@endsection

@section('script')
<script type="text/javascript" src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript">
        $('.gallery-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                }
            });
</script>

<script type="text/javascript">
     $(document).ready(function() {
            $('form').parsley();
            $('#btndone').click(function(){
               location.reload();
            });
    });
</script>

<script src="{{URL::asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>


@endsection

