<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
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
Route::get('/',[DemoController::class,'index']);
Route::get('/about',[DemoController::class,'about']);
Route::get('/course',SingleActionController::class);
Route::resource('/photo',PhotoController::Class);
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::Class,'register']);
Route::get('/customer',function(){
    $customer=Customer::all();
    echo "<pre>";
    print_r($customer->toArray());
});