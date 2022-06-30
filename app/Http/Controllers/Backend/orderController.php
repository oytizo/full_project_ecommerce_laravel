<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\orderModel;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order=orderModel::all();
        return view('backend/pages/order/order',compact('order'));
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
        //
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
        $success='Success';
        $orderonly=orderModel::find($id);
        $orderonly->status=$success;
        $orderonly->update();
        $order=orderModel::all();
        return view('backend/pages/order/order',compact('order'));
    }
    public function update1(Request $request, $id)
    {
        $pending='Pending';
        $orderonly=orderModel::find($id);
        $orderonly->status=$pending;
        $orderonly->update();
        $order=orderModel::all();
        return view('backend/pages/order/order',compact('order'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderonly=orderModel::find($id);
        $orderonly->delete();
        $order=orderModel::all();
        return view('backend/pages/order/order',compact('order'));

        
    }
}
