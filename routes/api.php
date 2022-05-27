<?php

use App\Models\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/logs",function(){
    $logs=Log::all();
    return $logs->toJson();
});

Route::post("/addlogs",function(Request $request){
    Log::create($request->all());
});

Route::post("/incremente",function(Request $request){
    $i=$request->i;
    $data["i"]=$i+1;
    return response()->json(json_encode($data), 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
});