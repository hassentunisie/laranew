<?php

use App\Models\Pere;
use Illuminate\Support\Facades\Route;

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

Route::get('/salut', function () {
    return view('bonjour');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/peres', function () {
    $peres=Pere::all();
    return view('pere_list')->with("peres",$peres);
})->name("pere.list");


Route::get('/fils/{pere_id}', function ($pere_id) {
    $pere=Pere::find($pere_id);
    return view('fils_list')->with("pere",$pere);
})->name("fils.list");