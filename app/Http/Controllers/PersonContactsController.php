<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonContacts;

class PersonContactsController extends Controller
{
    public function index(){
        return view('personContacts.index');
    }

    public function create(){
       
        return view('personContacts.create');
    }

    public function store( Request $request ){
       
        $personContact = new PersonContacts();

        $personContact->person_id = $request->person_id;
        $personContact->phone_number = $request->phone_number;
        $personContact->mobile_number = $request->mobile_number;
        $personContact->email_address = $request->email_address;

        $personContact->save();

        return view("personAddresses.create")
        ->with("person_id", $personContact->person_id);
    }
}
