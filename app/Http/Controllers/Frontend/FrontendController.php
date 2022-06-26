<?php

namespace App\Http\Controllers\Frontend;


use Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\productModel;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\addtocartModel;
use App\Models\Frontend\wishlistModel;

use App\Models\Backend\categoriesModel;
use App\Models\Backend\contact_usModel;

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
    public function wishlistadd ($id)
    {
        
        // Cart::add(array(
        //     'id' => $id, // inique row ID
        //     'name' => $product->name,
        //     'price' => $product->price,
        //     'quantity' => '1',
        //     'attributes' => array()
        // ));


        if(Auth::check()){
        $pid=wishlistModel::where('p_id',$id)->get();
        if($pid->count() > 0){
            return response()->json([
                'data'=>"same"
             ]);
        }
        else{
            $qntt=1;
            $product=productModel::find($id);
            $addcart=new wishlistModel;
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
    public function search($id)
    {
        $products = productModel::where('name', 'LIKE', '%'.$id.'%')->get();
       
        return response()->json([
            'data'=>$products
        ]);
        
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
     
        $id=1;
        $idd=0;
        $category=categoriesModel::all();
        $addcart=addtocartModel::find($id);
        $product = productModel::find($idd);
        return view('frontend.pages.cart',compact('category','addcart','product'));
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

    public function userindex()
    {
        if(Auth::check()){
            $deleteitem=addtocartModel::where('user_id',Auth::user()->id)->delete();

             return redirect()->route('/');
          }
    }

    public function contact_us()
    {
        $category=categoriesModel::all();

        return view('frontend/pages/contact_us',compact('category'));
    }
  

   public function insert_contact(Request $request)
    {
        $date = Carbon::now();
        
        $contact= new contact_usModel;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->mobile=$request->mobile;
        $contact->comment=$request->comment;
        $contact->added_on=$date ;

        $contact->save();

        return back();
    }

    
   public function wishlist()
   {
    if(Auth::check()){
        $category=categoriesModel::all();
        $wishlist=wishlistModel::where('user_id',Auth::user()->id)->get();
      //   $product = productModel::whereIn('id',$addcart)->paginate();
        $product = productModel::all();
         return view('frontend/pages/wishlist',compact('wishlist','product','category'));
      }
      else{
        $id=0;
        $idd=0;
        $category=categoriesModel::all();
        $wishlist=wishlistModel::find($id);
        $product = productModel::find($idd);
        return view('frontend/pages/wishlist',compact('category','wishlist','product'));
      }
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

    public function delwishlist($id)
    {
        $deleteitem=wishlistModel::where('p_id',$id)->delete();
        $category=categoriesModel::all();
        $wishlist=wishlistModel::where('user_id',Auth::user()->id)->get();
      //   $product = productModel::whereIn('id',$addcart)->paginate();
        $product = productModel::all();
         return view('frontend/pages/wishlist',compact('wishlist','product','category'));
    }
}
