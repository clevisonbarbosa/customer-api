<?php

namespace App\Http\Controllers\API;


use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\Address;

class CustomerAPIController extends AppBaseController
{

    public function index()
    {
       $customers = Customer::with('address')->get();
       return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {     
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->telephone = $request->telephone;
        $customer->birth = $request->birth;
        $customer->save();

        $address = new Address();
        $address->customer_id = $customer->id;
        $address->zipcode = $request->zipcode;
        $address->publicPlace = $request->publicPlace;
        $address->city = $request->city;
        $address->uf = $request->uf;
        $address->district = $request->district;
        $address->complement = $request->complement;
        $address->save();

        return redirect('api/customers');

    }
}
