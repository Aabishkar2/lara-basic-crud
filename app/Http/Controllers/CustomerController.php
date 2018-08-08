<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Country;
use App\Models\State;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('customer');
    }

    public function add()
    {
        return view('addcustomer');

    }

    
    public function addAction(Request $request)
    {
        $customer = new customer;
        $customer->name = $request->name;
        $customer->interest = implode(",",$request->interest);
        $customer->save();
        return redirect('customer');
    }

    public function edit(Request $request)
    {

        $customerID = $request->id;
        $data['result'] = Customer::getDetail($customerID);
        $interest = [];
        return view('editcustomer', $data, compact('interest'));
        

        // $sss = explode(" ", $interest);
        /*$customerName = $name;        
        $interest=[];
        $finds = customer::whereName($customerName)->get();
        
        foreach ($finds as $find) 
        
        {
            array_push($interest , $find->interest);
        }

        //$data['country'] = Country::getAll();
        return view ('editcustomer', compact( 'customerName','interest'));*/
        

    }

    public function update(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->name = $request->name;
        $customer->interest = implode(",",$request->interest);
        $customer->save();
        return redirect('customer');
    }

    public function delete(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->delete();
        return redirect('customer');
    }
    

}