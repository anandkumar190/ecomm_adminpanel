<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_categoryModel;
use App\ProductModel;

class ProductController extends Controller
{
   /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $sub_category=Sub_categoryModel::where('status','=',1)->pluck('name','id')->toArray();
          $result=ProductModel::where('status','=',1)->get()->toArray();
          return view('admin/master/product_type', compact('result','sub_category'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          //
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
                 
          $request->validate([
              'name' => 'required',
              'alias' => 'required',
              'sub_category' => 'required',
              'Status' => 'required',
             ],
             [
                 'name.required' => 'Name field is required!',
                 'alias.required' => 'Alias field is required!',
                 'sub_category.required' => 'Status field is required!',
                 'Status.required' => 'Status field is required!',
             ]);
         //dd($request->toArray());
          $Sub_cat = new ProductModel;
          $Sub_cat->name =$request->name;
          $Sub_cat->alias =$request->alias;
          $Sub_cat->sub_cat_id_fk =$request->sub_category;
          $Sub_cat->status =$request->Status;
          
          if($Sub_cat->Save()){
           return redirect('product-type');
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
         /**/
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
              'sub_category' => 'required',
              'Status' => 'required',
             ],
             [
                 'name.required' => 'Name field is required!',
                 'alias.required' => 'Alias field is required!',
                 'sub_category.required' => 'Alias field is required!',
                 'Status.required' => 'Status field is required!',
             ]);

          $Sub_cat = ProductModel::find($id);
          $Sub_cat->name =$request->name;
          $Sub_cat->alias =$request->alias;
          $Sub_cat->sub_cat_id_fk =$request->sub_category;
          $Sub_cat->status =$request->Status;
          
          if($Sub_cat->Save()){
              return redirect('product-type');
          }

      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
           $Sub_cat = ProductModel::find($id);
          if($Sub_cat->delete()){
              return redirect('product-type'); 
            } 
      }
}
