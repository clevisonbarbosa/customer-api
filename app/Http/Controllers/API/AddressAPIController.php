<?php

namespace App\Http\Controllers\API;


use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;


class AddressAPIController extends AppBaseController
{

    public function index()
    {
        return Address::all();
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'Zipcode' => 'required',
            'city' => 'requerided',
            'publicPlace' => 'required',
            'complement' => 'required',
            'district' => 'required',
            'uf' => 'required',
        ]);

        return Address::create($data);
    }


    public function show($id)
    {
        return Address::findOrfail($id);
    }


}
