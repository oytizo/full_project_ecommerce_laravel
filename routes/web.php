<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\Backend\productController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\categoriesController;
use App\Http\Controllers\Backend\contact_usController;

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


Route::get('/',[FrontendController::class,'index']);
Route::get('/customerregistration',[FrontendController::class,'customerregistration']);
Route::get('/add/{id}',[FrontendController::class,'add']);
Route::post('/cartupdate/{id}',[FrontendController::class,'updateitem'])->name('cartupdate');
Route::get('/cartdelete/{id}',[FrontendController::class,'deleteitem'])->name('cartdelete');
Route::get('/cart',[FrontendController::class,'cart'])->name('cart');
Route::get('/add1/{id}',[FrontendController::class,'add1']);


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
