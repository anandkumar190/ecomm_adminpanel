<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::Resource('category','CategoryController');
Route::Resource('sub-category','Sub_categoryController');
Route::Resource('brand','BrandController');
Route::Resource('product-type','ProductController');
Route::Resource('items','ItemsController');
Route::Resource('item-img','ItemteImgController');
Route::get('itemimg-upload','ItemteImgController@imgupload');

/*---------------------------------------------------------------*/
Route::get('sub_list','Getapicontroller@sublist');  
Route::get('product_list','Getapicontroller@product_typelist');  
/*-----------------------------------------------------------------*/



Route::get('{any}', 'AdmiriaController@index');



