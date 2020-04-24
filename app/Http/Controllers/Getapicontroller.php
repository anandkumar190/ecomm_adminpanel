<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_categoryModel;
use App\ProductModel;

class Getapicontroller extends Controller
{
    
    public function sublist(Request $request){
      
           $catid=$request->cat_id;
           $sub_category=Sub_categoryModel::where('status','=',1)
           ->where('category_id_fk','=',$catid)
           ->pluck('name','id')->toArray();
           return $sub_category;

    }    
    public function product_typelist(Request $request){
      
           $id=$request->cat_id;
           $product_type=ProductModel::where('status','=',1)
           ->where('sub_cat_id_fk','=',$id)
           ->pluck('name','id')->toArray();
           return $product_type;

    }
}
