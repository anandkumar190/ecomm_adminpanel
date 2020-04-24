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
<h3 class="page-title">Items</h1>
@endsection

@section('content')

                <!--  Modal content for the above example -->
            
       <div class="page-content-wrapper">
                 <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Items List</h4>
                                            <p class="text-muted m-b-30 font-14"> 
                                             <a href="{{url('items/create')}}"> <button type="button" class="btn btn-primary waves-effect waves-light pull-right"><i class="ion-plus-round"></i> Add</button></a>
                                                <code> </code>.
                                            </p>
                                              
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Sub-Category</th>              
                                <th>Product type</th>           
                                <th>Brand</th>
                                <th>MRP Price</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Discount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                         <tbody>
                          @foreach($items as $item)
                          <tr>
                              <td>{{$item['name']}}</td>
                              <td>{{$item['sub_name']}}</td>
                              <td>{{$item['product_name']}}</td>
                              <td>{{$item['brand_name']}}</td>
                              <td>{{$item['mrp_price']}}</td>
                              <td>{{$item['a_price']}}</td>
                              <td>{{$item['quantity']}}</td>
                              <td>{{$item['discount']}}</td>
                              <td> 
                              @php
                              $itemid="items/".$item['id']."/edit";
                              @endphp                               
                              <a href="{{url($itemid)}}">

                            <button class="listbtn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                <i class="mdi mdi-grease-pencil"></i>
                            </button>
                            </a>

                            {{ Form::open(array('url' => 'items/'.$item['id'], 'method'=>'Delete',)) }}

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

