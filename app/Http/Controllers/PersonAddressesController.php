<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonAddresses;

class PersonAddressesController extends Controller
{
    public function create(){
       
        return view('personAddresses.create');
    }

    public function store( Request $request ){
       
        $personAddress = new PersonAddresses();

        $personAddress->person_id = $request->person_id;
        $personAddress->street = $request->street;
        $personAddress->house_number = $request->house_number;
        $personAddress->city = $request->city;
        $personAddress->zip_code = $request->zip_code;
        $personAddress->country = $request->country;

        $personAddress->save();

        return view("/home");
    }
}
