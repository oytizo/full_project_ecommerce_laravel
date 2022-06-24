<?php

namespace App\Http\Controllers\Frontend;


use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\addtocartModel;
use App\Models\Backend\productModel;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\categoriesModel;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=categoriesModel::all();
        $product=productModel::all();
        return view('frontend.home',compact('category','product'));
    }
    public function add($id)
    {
        
        // Cart::add(array(
        //     'id' => $id, // inique row ID
        //     'name' => $product->name,
        //     'price' => $product->price,
        //     'quantity' => '1',
        //     'attributes' => array()
        // ));


        if(Auth::check()){
        $pid=addtocartModel::where('p_id',$id)->get();
        if($pid->count() > 0){
            return response()->json([
                'data'=>"same"
             ]);
        }
        else{
            $qntt=1;
            $product=productModel::find($id);
            $addcart=new addtocartModel;
            $addcart->user_id=Auth::user()->id;
            $addcart->p_id=$id;
            $addcart->qtn=$qntt;

            $addcart->save();
            // $product=productModel::where('id',)->get();

            return response()->json([
                'data'=>"success",
                'item'=>$product
             ]);
        }


       
        }
        else{
            return response()->json([
                'data'=>"notsuccess"
             ]);
        
        }

        
    }
    public function customerregistration()
    {
        return view('frontend.pages.customerregistration'); 
        
    }
    public function add1($id)
    {
        return view('frontend.pages.customerregistration'); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
      if(Auth::check()){
        $category=categoriesModel::all();
        $addcart=addtocartModel::where('user_id',Auth::user()->id)->get();
      //   $product = productModel::whereIn('id',$addcart)->paginate();
        $product = productModel::all();
         return view('frontend.pages.cart',compact('addcart','product','category'));
      }
      else{
        $category=categoriesModel::all();
        return view('frontend.pages.cart',compact('category'));
      }
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
    public function updateitem(Request $request,$id)
    {
        $updateitem=addtocartModel::where('p_id',$id)->update(array('qtn' =>$request->qnt));
        $category=categoriesModel::all();
        $addcart=addtocartModel::where('user_id',Auth::user()->id)->get();
        $product = productModel::all();
         return view('frontend.pages.cart',compact('addcart','product','category'));
        

        
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
    public function deleteitem($id)
    {
        $deleteitem=addtocartModel::where('p_id',$id)->delete();
        $category=categoriesModel::all();
        $addcart=addtocartModel::where('user_id',Auth::user()->id)->get();
        $product = productModel::all();
         return view('frontend.pages.cart',compact('addcart','product','category'));
    }
}
