<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Backend\bankModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PhoneAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart_no=$request->cart_no;
        $date=$request->date;
        $cvv_no=$request->cvv_no;
        $full_name=$request->full_name;
        $user = DB::table('bank_models')->where('full_name', $full_name)->where('card_no', $cart_no)->where('expair_date', $date)->where('cvv_no', $cvv_no)->get();
       // $user = DB::table('bank_models')->where('full_name', $full_name)->where('card_no', $cart_no)->get();
       // $user = bankModel::where('full_name', request('email'))->first();
       if(count($user)>0){
        $info= DB::table('bank_models')->where('card_no', $cart_no)->get();
         return view('frontend.pages.welcome',compact('info'));
        // return view('frontend.pages.welcome');
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
