<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller
{
    /**
     * index
     *
     * @author Oleksandr Kuzmenkov
     * @return View
     */ 
    public function index(){

        $persons = Persons::latest()->paginate(5);

        return view('persons.index',compact('persons'))
            ->with(request()->input('page'));
    }

    /**
     * create
     *
     * @author Oleksandr Kuzmenkov
     * @return View
     */ 
    public function create(){
        return view('persons.create');
    }

    /**
     * edit
     * @param integer
     * @author Oleksandr Kuzmenkov
     * @return View
     */ 
    public function edit( $id ){

        $person = Persons::find($id);

        return view('persons.edit', ['person' => $person]);
    }

    /**
     * edit
     * @param integer
     * @author Oleksandr Kuzmenkov
     * @return View
     */ 
    public function show( Persons $prson ){
        
        
        return view('persons.edit');
    }

    /**
     * edit
     * @param array
     * @author Oleksandr Kuzmenkov
     * @return View
     */ 
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

    public function destroy( Persons $person ){

        $person->delete();

        return redirect('persons');
    }
}
