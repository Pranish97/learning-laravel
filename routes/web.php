<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

Route::get('/{lang?}',function($lang = null){
    App::setLocale($lang);
    return view('welcome');

});

Route::get('/register',[CustomerController::class,'create'])->name('customer.create');
Route::post('/register',[CustomerController::Class,'store']);
Route::group(['prefix'=>'/customer'],function(){
    Route::get('/',[CustomerController::class,'selectAll']);
    Route::get('/',[CustomerController::Class,'view']);
    Route::get('trash',[CustomerController::Class,'trash']);
    Route::get('delete/{id}',[CustomerController::Class,'destroy'])->name('customer.delete');
    Route::get('restore/{id}',[CustomerController::Class,'restore'])->name('customer.restore');
    Route::get('force-delete/{id}',[CustomerController::Class,'forceDelete'])->name('customer.forcedelete');
    Route::get('edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('update/{id}',[CustomerController::class,'update'])->name('customer.update');

});


Route::get('/home',function(){
    return view ('index');
});

Route::get('/get-all-session',function(){
    $session = session()->all();
    p($session);
});
Route::get('set-session',function(Request $request){
    $request->session()->put('name' , 'Pranish');
    $request->session()->put('customer_id' , '123');
    $request->session()->flash('status','Success');
    return redirect('get-all-session');
});
Route::get('destroy-session',function(){
    session()->forget(['name','customer_id']);
    // session()->forget('customer_id');
    return redirect('get-all-session');
});