@extends('layouts.master')

@section('css')
<link href="{{ URL::asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
@endsection

@section('breadcrumb')
<h3 class="page-title">Form Validation</h1>
@endsection

@section('content')
       <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Range validation</h4>

                     {{ Form::open(array('url' => 'items/'.$item->id, 'method'=>'put','id'=>'from_id')) }}
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label>Items Name</label>
                              <div>
                                <input type="text" name="name" class="form-control" value="{{$item->name}}" required data-parsley-minlength="2" placeholder="Min 2 chars."/>
                                </div>
                             </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label>alias</label>
                                <div>
                                    <input type="text" name="alias" class="form-control" required 
                                    value="{{$item->alias}}" data-parsley-minlength="2" placeholder="Min 2 chars."/>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                        <div class="form-group">
                            <label>Category</label>
                            <div>

                {{Form::select('category',[''=>'Please Select']+$cat,$item->cat_id_fk,array('class'=>'form-control','id'=>'category_id','required'=>true))}}
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label>Sub Category</label>
                            <div>
                {{Form::select('sub_cat',[''=>'Please Select']+$sub_category,$item->s_cat_id_fk,array('class'=>'form-control','id'=>'sub_cat','required'=>true))}}
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                          <div class="col-lg-6">
                        <div class="form-group">
                            <label>Product type</label>
                            <div>
                {{Form::select('product_type',[''=>'Please Select']+$product_type,$item->product_type_id_fk,array('class'=>'form-control','id'=>'product_type','required'=>true))}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Brand</label>
                            <div>
                {{Form::select('Brand',[''=>'Please Select']+$brands,$item->brand_id_fk,array('class'=>'form-control','id'=>'category_id'))}}
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Price MRP</label>
                            <div>
                                <input name="mrp_price"class="form-control" value="{{$item->mrp_price}}"required type="text" data-parsley-min="1"
                                placeholder="Enter Price MRP"/>
                            </div>
                        </div>
                    </div>                                          <div class="col-lg-6">
                        <div class="form-group">
                            <label>Price actually</label>
                            <div>
                                <input  name="a_price" value="{{$item->a_price}}" class="form-control" required type="text" data-parsley-min="1"
                                placeholder="Enter Price actually"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Number Quantity</label>
                            <div>
                                <input name="quantity" value="{{$item->quantity}}" class="form-control" required type="text" data-parsley-min="1"
                                placeholder="Enter Number Quantity"/>
                            </div>
                        </div>
                    </div>                                          <div class="col-lg-6">
                        <div class="form-group">
                            <label>New condition  between two dates</label>
                            <div class="input-daterange input-group" id="date-range">
                                <input type="text" value="{{ date('d/m/Y',strtotime($item->start_date))}}" class="form-control" required name="startdate" />
                                <input type="text" value="{{date('d/m/Y',strtotime($item->ena_date))}}" required class="form-control" name="enddate" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Country mangnifactur</label>
                            <div>
                                {{Form::select('country',[''=>'Please Select','1'=>'USA','91'=>'INDIA'],$item->country_id,array('class'=>'form-control','id'=>'country','required'=>true))}}
                            </div>
                        </div>
                    </div> 

                                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Discount</label>
                            <div>
                                <input  name="discount" type="text" class="form-control" value="{{$item->discount}}" required
                                       data-parsley-min="1"
                                       placeholder="Enter Discount in Amount "/>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Content description</label>
                            <div>
                          <textarea  name="description" id="elm1" name="area"> {{$item->description}} </textarea>
                            </div>
                        </div>
                    </div>

                </div>

                        <div class="form-group m-b-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light m-r-5">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div><!-- container -->
                </div> <!-- Page content Wrapper -->
@endsection

@section('script')
<!-- Parsley js -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>

    <script src="{{ URL::asset('assets/pages/form-advanced.js') }}"></script>

@endsection

@section('script-bottom')
<script type="text/javascript">
 $(document).ready(function() {
        $('form').parsley();
});
</script>

<script type="text/javascript">

$(document).ready(function(){
    $('#category_id').change(function(){
    var id=$('#category_id').val();

    $("#sub_cat").empty();
    var str='<option value ="">Please Select</option>'; 
    $("#sub_cat").append(str);

    $.get("{{url('sub_list')}}",{cat_id:id},function(data, status){
        $.each(data,function(index,value){
            str='<option value ="'+index+'">'+value+'</option>'; 
            $("#sub_cat").append(str);
            console.log(str);
        });      
     });
    });

    $('#sub_cat').change(function(){
    var id=$('#sub_cat').val();

    $("#product_type").empty();
    var str='<option value ="">Please Select</option>'; 
    $("#product_type").append(str);

    $.get("{{url('product_list')}}",{cat_id:id},function(data, status){
        $.each(data,function(index,value){
            str='<option value ="'+index+'">'+value+'</option>'; 
            $("#product_type").append(str);
            console.log(str);
        });      
     });
    });    
});
</script>
<script src="{{ URL::asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script>
        $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>


@endsection

