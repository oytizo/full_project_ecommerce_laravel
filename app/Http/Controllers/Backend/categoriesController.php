<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\categoriesModel;
use App\Models\Backend\productModel;
use Illuminate\Http\Request;
use validate;
class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=categoriesModel::all();

        return view('backend/pages/categories/categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/pages/categories/manage_categories');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'categories' => 'required|string|max:255',
        ]);

        if($validated){
            $categories=new categoriesModel;
            $categories->categories=$request->categories;
            $categories->save();
            return redirect()->route('categoriesview');
        }
        else{
            return back();
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
        $categories=categoriesModel::find($id);
        return view('backend/pages/categories/edit_categories',compact('categories'));
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
        $categories=categoriesModel::find($id);
        $categories->categories=$request->categories;
        $categories->update();
        return redirect()->route('categoriesview');
    }
public function statusupdate($id){
    $categories=categoriesModel::find($id);
    $product_status=productModel::where('cat_id',$id)->get();
    foreach($product_status as $status){
        $status->status='0';
        $status->update();
    }
    $categories->status='0';
    $categories->update();
    return redirect()->route('categoriesview');
}
public function statusupdate1($id){
    $categories=categoriesModel::find($id);
    $product_status=productModel::where('cat_id',$id)->get();
    foreach($product_status as $status){
        $status->status='1';
        $status->update();
    }
    $categories->status='1';
    $categories->update();
    return redirect()->route('categoriesview');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $categories=categoriesModel::find($id);
        $categories->delete();
        return redirect()->route('categoriesview');


    }
}
