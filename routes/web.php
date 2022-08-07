<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

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

/*Route::get('/{name?}',function($name=null){
    $demo = "<h2>Pranish</h2>";
    $data=compact('name','demo');
    
    return view('home')->with($data);

});*/
// Route::get('/',[DemoController::class,'index']);
// Route::get('/about',[DemoController::class,'about']);
// Route::get('/course',SingleActionController::class);
// Route::resource('/photo',PhotoController::Class);


Route::get('/register',[CustomerController::class,'create'])->name('customer.create');
Route::post('/register',[CustomerController::Class,'store']);
Route::get('/customer',[CustomerController::class,'selectAll']);
Route::get('/customer',[CustomerController::Class,'view']);
Route::get('customer/delete/{id}',[CustomerController::Class,'destroy'])->name('customer.delete');
Route::get('/home',function(){
    return view ('index');
});
