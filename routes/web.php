<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\Backend\bankController;
use App\Http\Controllers\Backend\orderController;
use App\Http\Controllers\Backend\productController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Backend\categoriesController;
use App\Http\Controllers\Backend\contact_usController;
use App\Http\Controllers\Frontend\PhoneAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// SSLCOMMERZ Start
Route::get('/checkout2', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('checkout2'); 
Route::get('/checkout1', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('checkout1');

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::get('/anotherpayment', [SslCommerzPaymentController::class, 'anotherpayment'])->name('anotherpayment');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::post('/phone_auth', [PhoneAuthController::class, 'store'])->name('phone_auth');
Route::get('/phone_auth', [PhoneAuthController::class, 'create']);

Route::get('/',[FrontendController::class,'index'])->name('/');
Route::get('/user',[FrontendController::class,'userindex']);
Route::get('/payment',[FrontendController::class,'payment'])->name('payment');
Route::get('/customerregistration',[FrontendController::class,'customerregistration']);
Route::get('/add/{id}',[FrontendController::class,'add'])->name('add');
Route::get('/wishlistadd/{id}',[FrontendController::class,'wishlistadd']);
Route::get('/search/{id}',[FrontendController::class,'search']);
Route::post('/cartupdate/{id}',[FrontendController::class,'updateitem'])->name('cartupdate');
Route::get('/cartdelete/{id}',[FrontendController::class,'deleteitem'])->name('cartdelete');
Route::get('/cart',[FrontendController::class,'cart'])->name('cart');
Route::get('/add1/{id}',[FrontendController::class,'add1'])->name('add1');
Route::get('/product_view/{id}',[FrontendController::class,'product_view'])->name('product_view');
Route::get('/contact_us',[FrontendController::class,'contact_us'])->name('contact_us');
Route::post('/insert_contact',[FrontendController::class,'insert_contact'])->name('insert_contact');
Route::get('/wishlist',[FrontendController::class,'wishlist'])->name('wishlist');
Route::get('/delwishlist/{id}',[FrontendController::class,'delwishlist'])->name('delwishlist');
Route::get('/qntupdate',[FrontendController::class,'qntupdate'])->name('qntupdate');
Route::get('/history',[FrontendController::class,'history'])->name('history');

Route::get('/bank',[bankController::class,'index']);
Route::post('/bankdata',[bankController::class,'store'])->name('bankdata');


Route::get('/log', function () {
    return view('frontend.pages.customerlogin');
})->name('log');

Route::get('/logreg', function () {
    return view('frontend.pages.customerregistration');
})->name('logreg');

Route::get('/admin', function () {
    return view('backend.index');
})->middleware(['myauth'])->name('dashboard');


Route::group(['prefix'=>'/admin'],function(){
    Route::group(['prefix'=>'/categories'],function(){
        Route::get('/categoriesview',[categoriesController::class,'index'])->name('categoriesview')->middleware(['myauth']);
        Route::get('/insertcategories',[categoriesController::class,'create'])->name('insertcategories')->middleware(['myauth']);
        Route::post('/addcategories',[categoriesController::class,'store'])->name('addcategories')->middleware(['myauth']);
        Route::get('/editcategories/{id}',[categoriesController::class,'edit'])->name('editcategories')->middleware(['myauth']);
        Route::post('/updatecategories/{id}',[categoriesController::class,'update'])->name('updatecategories')->middleware(['myauth']);
        Route::get('/category_status/{id}',[categoriesController::class,'statusupdate'])->name('category_status')->middleware(['myauth']);
        Route::get('/category_status1/{id}',[categoriesController::class,'statusupdate1'])->name('category_status1')->middleware(['myauth']);
        Route::get('/deletecategories/{id}',[categoriesController::class,'delete'])->name('deletecategories')->middleware(['myauth']);
    });
    
    Route::group(['prefix'=>'/product'],function(){
        Route::get('/productview',[productController::class,'index'])->name('productview')->middleware(['myauth']);
        Route::get('/insertproduct',[productController::class,'create'])->name('insertproduct')->middleware(['myauth']);
        Route::post('/addproduct',[productController::class,'store'])->name('addproduct')->middleware(['myauth']);
        Route::get('/editproduct/{id}',[productController::class,'edit'])->name('editproduct')->middleware(['myauth']);
        Route::post('/updateproduct/{id}',[productController::class,'update'])->name('updateproduct')->middleware(['myauth']);
        Route::get('/deleteproduct/{id}',[productController::class,'delete'])->name('deleteproduct')->middleware(['myauth']);
    });
    Route::group(['prefix'=>'/order'],function(){
        Route::get('/orderview',[orderController::class,'index'])->name('orderview')->middleware(['myauth']);
        Route::get('/updateorder/{id}',[orderController::class,'update'])->name('updateorder')->middleware(['myauth']);
        Route::get('/updateorder1/{id}',[orderController::class,'update1'])->name('updateorder1')->middleware(['myauth']);
        Route::get('/deleteorder/{id}',[orderController::class,'destroy'])->name('deleteorder')->middleware(['myauth']);

    });
    Route::group(['prefix'=>'/contact_us'],function(){
        Route::get('/contactview',[contact_usController::class,'index'])->name('contactview')->middleware(['myauth']);
        Route::get('/deletecontact/{id}',[contact_usController::class,'destroy'])->name('deletecontact')->middleware(['myauth']);

    });
    Route::group(['prefix'=>'/userinfo'],function(){
        Route::get('/userview',[contact_usController::class,'userview'])->name('userview')->middleware(['myauth']);
        Route::get('/deleteuser/{id}',[contact_usController::class,'deleteuser'])->name('deleteuser')->middleware(['myauth']);

    });
});

require __DIR__.'/auth.php';
