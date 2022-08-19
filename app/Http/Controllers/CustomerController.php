<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    public function selectAll(Request $request){
        $customer=Customer::all();
        echo "<pre>";
        print_r($customer->toArray());
       

    }
    public function edit($id){

        $customer = Customer::find($id);
        if(is_null($customer)){
           return redirect('customer');
        }
        else{
            $url = url('/customer/update')."/". $id;
            $title = "Update Customer";
            $data = compact ('customer','url','title');
            return view ('customer')->with($data);            
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = url('/register');
        $customer=new Customer();
        $title = "Registration Form";
        $data = compact('url','title','customer');
        return view('customer')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "<pre>";
        //print_r($request->all());
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'country'=>'required',
                'state'=>'required',
                'address'=>'required',
                'dob'=>'required'
            ]);

        $customer=new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect('/customer');
            



        
       
    }
    public function view(Request $request){
        $search = $request['search'] ?? "";
        if($search !=""){
            $customer =Customer::where('name' ,'LIKE' , "%$search%")->orWhere('email' ,'LIKE' , "%$search%")->get();
        }
        else{
            $customer=Customer::all();
        }
        $data = compact('customer','search');
        return view('customer-view')->with($data);
    }
    public function trash(){
        $customer=Customer::onlyTrashed()->get();
        $data = compact('customer');
        return view('customer-trash')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('customer');
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)){
            $customer -> restore();
        }
        return redirect('customer');   

    }
    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)){
            $customer -> forceDelete();
        }
        return redirect()->back();   

    }
    public function destroy($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)){
            $customer -> delete();
        }
        return redirect('customer');   

    }
}