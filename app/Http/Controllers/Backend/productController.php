<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\categoriesModel;
use App\Models\Backend\productModel;
use Illuminate\Http\Request;
use Image;
use File;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {
        $product = productModel::all();
        $category = categoriesModel::all();
        return view('backend/pages/product/product', compact('product', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = categoriesModel::all();
        return view('backend/pages/product/manage_product', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new productModel;
        $product->name = $request->name;
        $product->cat_id = $request->categories;
        $product->mrp = $request->mrp;
        $product->price = $request->price;
        $product->qnt = $request->qnt;
        $product->short_desc = $request->short_desc;
        if ($request->image) {
            $image = $request->file('image');
            $customname = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/product_image/' . $customname);
            Image::make($image)->save($location);
            $product->image = $customname;
        }

        $product->save();


        return redirect()->route('productview');
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
        $product=productModel::find($id);
        $category=categoriesModel::all();
        return view('backend/pages/product/edit_product',compact('category','product'));
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
        $product = productModel::find($id);
        $product->name = $request->name;
        $product->cat_id = $request->categories;
        $product->mrp = $request->mrp;
        $product->price = $request->price;
        $product->qnt = $request->qnt;
        $product->short_desc = $request->short_desc;
        if ($request->image) {
            if (File::exists('backend/product_image/'. $product->image)) {
                File::delete('backend/product_image/'. $product->image);
            }
            $image = $request->file('image');
            $customname = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/product_image/' . $customname);
            Image::make($image)->save($location);
            $product->image = $customname;
        }

        $product->update();


        return redirect()->route('productview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = productModel::find($id);
        if (File::exists('backend/product_image/'. $product->image)) {
            File::delete('backend/product_image/'. $product->image);
        }
        $product->delete();
        return redirect()->route('productview');
    }
}
