<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BrandModel;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $result=BrandModel::where('status','=',1)->get()->toArray();
        return view('admin/master/brand',compact('result'));
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
            'Status' => 'required',
           ],
           [
               'name.required' => 'Name field is required!',
               'alias.required' => 'Alias field is required!',
               'Status.required' => 'Status field is required!',
           ]);
       //dd($request->toArray());
        $Cat = new BrandModel;
        $Cat->name =$request->name;
        $Cat->alias =$request->alias;
        $Cat->status =$request->Status;
        
        if($Cat->Save()){
            return redirect('brand');
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
            'Status' => 'required',
           ],
           [
               'name.required' => 'Name field is required!',
               'alias.required' => 'Alias field is required!',
               'Status.required' => 'Status field is required!',
           ]);

        $Cat = BrandModel::find($id);
        $Cat->name =$request->name;
        $Cat->alias =$request->alias;
        $Cat->status =$request->Status;
        
        if($Cat->Save()){
          return redirect('brand');
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
        //dd($id);
        $Cat = BrandModel::find($id);
        if($Cat->delete()){
            return redirect('brand'); 
        }

    }
}
