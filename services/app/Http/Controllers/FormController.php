<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }
    public function upload(Request $request){
        $filename =  time()."pj.".$request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeas('uploads',$filename);
      

    }
}
