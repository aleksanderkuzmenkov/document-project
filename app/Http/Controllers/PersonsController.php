<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller
{
    public function index(){
        return view('persons.index');
    }

    public function create(){
        return view('persons.create');
    }

    public function store( Request $request ){
       
        $person = new Persons();

        $person->first_name = $request->first_name;
        $person->user_id = auth()->user()->id;
        $person->last_name = $request->last_name;
        $person->date_of_birth = $request->date_of_birth;
        $person->profession = $request->profession;
        $person->employed_since = $request->employed_since;

        $person->save();
        
        return view("personContacts.create")
        ->with("person_id", $person->id);
    }

    public function getData(){

        $person = Persons::where('user_id', auth()->user()->id);

        dd( $person );
    }
}
