<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $result=CategoryModel::where('status','!=',4)->get()->toArray();
        return view('admin/master/category',compact('result'));
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
        $Cat = new CategoryModel;
        $Cat->name =$request->name;
        $Cat->alias =$request->alias;
        $Cat->status =$request->Status;
        
        if($Cat->Save()){
            return redirect('category');
        }
    }


    /**
     * Display the specified resource.
     *
w     * @param  int  $id
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
        dd($id);
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

        $Cat = CategoryModel::find($id);
        $Cat->name =$request->name;
        $Cat->alias =$request->alias;
        $Cat->status =$request->Status;
        
        if($Cat->Save()){
           return redirect('category');
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
        $Cat = CategoryModel::find($id);
        if($Cat->delete()){
            return redirect('category');
        }

    }
}
    