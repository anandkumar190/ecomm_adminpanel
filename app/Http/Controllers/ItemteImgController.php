<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemteImgModel;
use Storage;

class ItemteImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = ItemteImgModel::where('title','!=','')->get()->toArray();
        return view('admin/master/Item_Img/item_img',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin/master/Item_Img/imageadd');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $files=$request->file('file');

        
        $obj=new ItemteImgModel;
        $obj->title=$files->getClientOriginalName();
        $obj->path=$files->store('public/item_img');
        $obj->save();
     
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagepath=ItemteImgModel::find($id);
        $dir=explode("/", $imagepath->path);

         if($imagepath->delete()){
          $result=Storage::delete($dir[0].'/'.$dir[1].'/'.$dir[2]);
          if ($result) {
              return redirect('item-img');
          }
         }
    }
}
