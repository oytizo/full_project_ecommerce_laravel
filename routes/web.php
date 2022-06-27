<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
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
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::get('phone-auth', [PhoneAuthController::class, 'index']);

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
Route::get('/add1/{id}',[FrontendController::class,'add1']);
Route::get('/contact_us',[FrontendController::class,'contact_us'])->name('contact_us');
Route::post('/insert_contact',[FrontendController::class,'insert_contact'])->name('insert_contact');
Route::get('/wishlist',[FrontendController::class,'wishlist'])->name('wishlist');
Route::get('/delwishlist/{id}',[FrontendController::class,'delwishlist'])->name('delwishlist');



Route::get('/admin', function () {
    return view('backend.index');
})->middleware(['myauth'])->name('dashboard');


Route::group(['prefix'=>'/admin'],function(){
    Route::group(['prefix'=>'/categories'],function(){
        Route::get('/categoriesview',[categoriesController::class,'index'])->name('categoriesview');
        Route::get('/insertcategories',[categoriesController::class,'create'])->name('insertcategories');
        Route::post('/addcategories',[categoriesController::class,'store'])->name('addcategories');
        Route::get('/editcategories/{id}',[categoriesController::class,'edit'])->name('editcategories');
        Route::post('/updatecategories/{id}',[categoriesController::class,'update'])->name('updatecategories');
        Route::get('/deletecategories/{id}',[categoriesController::class,'delete'])->name('deletecategories');
    });
    
    Route::group(['prefix'=>'/product'],function(){
        Route::get('/productview',[productController::class,'index'])->name('productview');
        Route::get('/insertproduct',[productController::class,'create'])->name('insertproduct');
        Route::post('/addproduct',[productController::class,'store'])->name('addproduct');
        Route::get('/editproduct/{id}',[productController::class,'edit'])->name('editproduct');
        Route::post('/updateproduct/{id}',[productController::class,'update'])->name('updateproduct');
        Route::get('/deleteproduct/{id}',[productController::class,'delete'])->name('deleteproduct');
    });
    Route::group(['prefix'=>'/contact_us'],function(){
        Route::get('/contactview',[contact_usController::class,'index'])->name('contactview');
        Route::get('/deletecontact/{id}',[contact_usController::class,'destroy'])->name('deletecontact');

    });
});

require __DIR__.'/auth.php';
