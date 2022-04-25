<?php

use App\Models\Log;
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
})->name("salut");

Route::get('/acceuil', function () {
    return view('acceuil');
})->name("acceuil");

Route::get('/produit', function () {
    return view('produit');
})->name("produit");

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

Route::get("/logs",function(){
    $logs=Log::all();
    return view("logs_view")->with("logs",$logs);
});

Route::get('rfid/{rfid}',function($rfid){
    $data["nom"]="ali";
    $data["access"]=1;
    return response()->json(json_encode($data), 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
});