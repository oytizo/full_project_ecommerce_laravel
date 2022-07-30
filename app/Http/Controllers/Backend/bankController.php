<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\bankModel;
use Illuminate\Http\Request;

class bankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/bank');
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
        $validated = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'fullname' => 'required|max:255',
            'birth' => 'required',
            'age' => 'required|integer',
            'branchname' => 'required|max:255',
            'city' => 'required|max:255',
            'expair_date' => 'required|max:255',
            'cvvno' => 'required|integer|min:0000|max:9999',
            'cartno' => 'required|min:0000000000000000|max:9999999999999999',
            'email' => 'required|max:255',
            'phone' => 'required|min:01|max:019999999999999',
        ]);
        $bankdata=new bankModel();

        $bankdata->first_name=$request->firstname;
        $bankdata->last_name=$request->lastname;
        $bankdata->full_name=$request->fullname;
        $bankdata->birth_date=$request->birth;
        $bankdata->age=$request->age;
        $bankdata->branch_name=$request->branchname;
        $bankdata->card_no=$request->birth;
        $bankdata->city=$request->city;
        $bankdata->expair_date=$request->expair_date;
        $bankdata->cvv_no=$request->cvvno;
        $bankdata->card_no=$request->cartno;
        $bankdata->email=$request->email;
        $bankdata->phone=$request->phone;

        $bankdata->save();
        return back();
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
        //
    }
}
