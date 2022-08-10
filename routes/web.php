<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonsController;
use App\Http\Controllers\PersonContactsController;
use App\Http\Controllers\PersonAddressesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    $persons = DB::table('persons')->where('user_id', '=', auth()->user()->id)->get();

    // $prsonContacts = DB::table('person_contacts')->where('person_id', '=', $persons->id)->get();
    // $prsonAddresses = DB::table('person_addresses')->where('person_id', '=', $persons->id)->get();

    // $counter = 100;

    // if( count( $persons ) == 0 ){
    //     $counter = $counter - 33.3;
    // }

    // if( count( $personContacts ) == 0 ){
    //     $counter = $counter - 33.3;
    // }

    // if( count( $personsAddresses ) == 0 ){
    //     $counter = $counter - 33.3;
    // }

    return view('home', [
        'persons' => $persons,
        'counter' => 1
    ]);

});

// --- persons routes ---
Route::get('/persons', [App\Http\Controllers\PersonsController::class, 'index']);
Route::get('/persons/create', [App\Http\Controllers\PersonsController::class, 'create'])->name('persons');
Route::post('/persons', [App\Http\Controllers\PersonsController::class, 'store']);
Route::get('/persons/{person}/edit', [App\Http\Controllers\PersonsController::class, 'edit']);
Route::delete('/persons/{person}/delete', [App\Http\Controllers\PersonsController::class, 'destroy']) ;

// --- person contact routes ---
Route::get('/personContacts', [App\Http\Controllers\PersonContactsController::class, 'create'])->name('personContacts');
Route::post('/personContacts', [PersonContactsController::class, 'store']);

// --- preson addresses routes ---
Route::get('/personAddresses', [App\Http\Controllers\PersonAddressesController::class, 'create'])->name('personAddresses');
Route::post('/personAddresses', [PersonAddressesController::class, 'store']);