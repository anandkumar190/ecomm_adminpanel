<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\BrandModel;
use App\itemsModel;
use App\Sub_categoryModel;
use App\ProductModel;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
    $items=itemsModel::join('category','category.id','=','items.cat_id_fk')
    ->join('sub_category','sub_category.id','=','items.s_cat_id_fk')
    ->join('products','products.id','=','items.product_type_id_fk')
    ->join('brand','brand.id','=','items.brand_id_fk')
    ->select('items.id','items.name','sub_category.name As sub_name','products.name As product_name','brand.name As brand_name','items.mrp_price','items.a_price','items.quantity','items.discount')
    ->get()
    ->toArray();

        return view('admin/master/product/itemslist',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
      $cat=CategoryModel::where('status','!=',0)->pluck('name','id')->toArray();
      $brands=BrandModel::where('status','!=',0)->pluck('name','id')->toArray();

         return view('admin/master/product/items',compact('cat','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->toArray());
        $request->validate([
            'name' => 'required',
            'alias' => 'required',
            'category' => 'required',
            'sub_cat' => 'required',
            'product_type' => 'required',
            'Brand' => 'required',
            'mrp_price' => 'required',
            'a_price' => 'required',
            'quantity' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'country' => 'required',
            'description' => 'required',
           ],
           [
               'name.required' => 'Name field is required!',
               'alias.required' => 'Alias field is required!',
               'category.required' => 'Status field is required!',
               'sub_cat.required' => 'field is required!',
               'product_type.required' => 'field is required!',
               'Brand.required' => 'field is required!',
               'a_price.required' => 'field is required!',
               'mrp_price.required' => 'field is required!',
               'quantity.required' => 'field is required!',
               'startdate.required' => 'field is required!',
               'enddate.required' => 'field is required!',
               'country.required' => 'field is required!',
               'description.required' => 'field is required!',
           ]);       
        $obj=new itemsModel;
        $obj->name=$request->name;
        $obj->alias=$request->alias;
        $obj->cat_id_fk=$request->category;
        $obj->s_cat_id_fk=$request->sub_cat;
        $obj->product_type_id_fk=$request->product_type;
        $obj->brand_id_fk=$request->Brand;
        $obj->mrp_price=$request->mrp_price;
        $obj->a_price=$request->a_price;
        $obj->quantity=$request->quantity;
        $obj->start_date=date("Y-m-d",strtotime($request->startdate));
        $obj->ena_date=date("Y-m-d", strtotime($request->enddate));
        $obj->country_id=$request->country;
        $obj->discount=$request->discount;
        $obj->description=$request->description;

        if($obj->save()){
         return redirect('items');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=CategoryModel::where('status','!=',0)->pluck('name','id')->toArray();
        $brands=BrandModel::where('status','!=',0)->pluck('name','id')->toArray();

       $item=itemsModel::where('id','=',$id)->first();

       $sub_category=Sub_categoryModel::where('status','=',1)
       ->where('category_id_fk','=',$item->cat_id_fk)
       ->pluck('name','id')->toArray();

       $product_type=ProductModel::where('status','=',1)
       ->where('sub_cat_id_fk','=',$item->s_cat_id_fk)
       ->pluck('name','id')->toArray();

       return view('admin/master/product/edititem',compact('sub_category','product_type','cat','brands','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'alias' => 'required',
            'category' => 'required',
            'sub_cat' => 'required',
            'product_type' => 'required',
            'Brand' => 'required',
            'mrp_price' => 'required',
            'a_price' => 'required',
            'quantity' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'country' => 'required',
            'description' => 'required',
           ],
           [
               'name.required' => 'Name field is required!',
               'alias.required' => 'Alias field is required!',
               'category.required' => 'Status field is required!',
               'sub_cat.required' => 'field is required!',
               'product_type.required' => 'field is required!',
               'Brand.required' => 'field is required!',
               'a_price.required' => 'field is required!',
               'mrp_price.required' => 'field is required!',
               'quantity.required' => 'field is required!',
               'startdate.required' => 'field is required!',
               'enddate.required' => 'field is required!',
               'country.required' => 'field is required!',
               'description.required' => 'field is required!',
           ]);       
        $obj=itemsModel::find($id);
        $obj->name=$request->name;
        $obj->alias=$request->alias;
        $obj->cat_id_fk=$request->category;
        $obj->s_cat_id_fk=$request->sub_cat;
        $obj->product_type_id_fk=$request->product_type;
        $obj->brand_id_fk=$request->Brand;
        $obj->mrp_price=$request->mrp_price;
        $obj->a_price=$request->a_price;
        $obj->quantity=$request->quantity;
        $obj->start_date=date("Y-m-d",strtotime($request->startdate));
        $obj->ena_date=date("Y-m-d", strtotime($request->enddate));
        $obj->country_id=$request->country;
        $obj->discount=$request->discount;
        $obj->description=$request->description;

        if($obj->save()){
         return redirect('items');
        }
       dd($request->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
