@extends('layouts.master')

@section('css')
<!-- DataTables

validation jequery/php -->
<link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
<link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
<!--     <link rel="stylesheet" href="{{ URL::asset('assets/jquery_validation/css/screen.css') }}">

        <script src="{{ URL::asset('assets/jquery_validation/lib/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/jquery_validation/dist/jquery.validate.js') }}"></script> -->

@section('breadcrumb')
<h3 class="page-title">Products</h1>
@endsection

@section('content')

                <!--  Modal content for the above example -->
                <div class="modal fade" tabindex="-1" id="catmodel" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Products From</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                    <!-- <form class="" action="#"> -->
                        {{ Form::open(array('url' => 'product-type', 'method'=>'post','id'=>'cat_from')) }}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"  name="name" id="name_id" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="form-group">
                                <label>Alias</label>
                                <input type="text" name="alias" id="alias_id" class="form-control" required placeholder="Type something"/>
                            </div>

                            <div class="form-group">
                              <label>Sub-Category</label>

                    {{Form::select('sub_category',[''=>'Please Select']+$sub_category,'',array('class'=>'form-control','id'=>'sub_category'))}}

                        </div> 

                           <div class="form-group">
                             <label>Status</label>
                             <select id="Status" name="Status" class="form-control">
                                                <option value="">--Please Select--</option>
                                                <option value="1" selected="">Active</option>
                                                <option value="0">Deactive</option>
                                             
                                           </select>

                        
                                     </div>  
                             
                        
                            <button type="submit" class="btn btn-pink waves-effect waves-light m-r-5 pull-right">Submit 
                            </button>
                         {{ Form::close() }}
                            <!-- </form> -->
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
                                <th>Category Name</th>
                                <th>Sub-Category</th>              
                                <th>Alias</th>                               
                                <th>Craeted At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                           @foreach($result as $val)     



                            <tr>
                                <td>{{$val['name']}}</td>
                                <td>{{ucfirst($sub_category[$val['sub_cat_id_fk']])}}</td>                                
                                <td>{{$val['alias']}}</td>
                                <td>{{$val['created_at']}}</td>
                                <td>{{$val['updated_at']}}</td>    
                                <td>
                                <button onclick="editfuc('{{$val['name']}}','{{$val['alias']}}','{{$val['id']}}','{{$val['status']}}','{{$val['sub_cat_id_fk']}}')" class="listbtn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                <i class="mdi mdi-grease-pencil"></i>
                            </button>
                            {{ Form::open(array('url' => 'product-type/'.$val['id'], 'method'=>'Delete',)) }}

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
<script type="text/javascript">

    $(document).ready(function(){
        
        $('#name_id').keyup(function(){
            var strname=$(this).val();
                strname=strname.toLowerCase();
                strname=strname.split(" ");
                 strname=strname.join("-");
            $('#alias_id').val(strname);               
        });

    });


    function editfuc(name,alias,id,status,sub_cat_id_fk){
        $('#name_id').val(name);
        $('#alias_id').val(alias);
        $('#Status').val(status);
        $('#sub_category').val(sub_cat_id_fk);
        $('#cat_from').attr('action','product-type/'+id);
         $('#name_id').append("<input name='_method' type='hidden' value='put' />");
        $('#catmodel').modal('show');

    }

</script>

<script type="text/javascript">
     $(document).ready(function() {
            $('form').parsley();
    });
</script>
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

