<?php

use Illuminate\Http\Request;
use App\City;

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


Route::get('data', 'CityController@index');

//Kota
Route::get('kota/provinsi/{prov}', function($prov) {
    return City::where('provinsi', $prov)->get();
});
Route::get('kota/negara/{negara}', function($negara) {
    return City::where('negara', $negara)->get();
});
Route::get('kota/geonameid/{geonameid}', function($geonameid) {
    return City::where('geonameid', $geonameid)->get();
});


//Provinsi
Route::get('provinsi/kota/{kota}', function($kota) {
    return City::where('kota', $kota)->get();
});
Route::get('provinsi/negara/{negara}', function($negara) {
    return City::where('negara', $negara)->get();
});
Route::get('provinsi/geonameid/{geonameid}', function($geonameid) {
    return City::where('geonameid', $geonameid)->get();
});


//Negara
Route::get('negara/provinsi/{prov}', function($prov) {
    return City::where('provinsi', $prov)->get();
});
Route::get('negara/kota/{kota}', function($kota) {
    return City::where('kota', $kota)->get();
});
Route::get('negara/geonameid/{geonameid}', function($geonameid) {
    return City::where('geonameid', $geonameid)->get();
});


//GeonameID
Route::get('geonameid/provinsi/{prov}', function($prov) {
    return City::where('provinsi', $prov)->get();
});
Route::get('geonameid/kota/{kota}', function($kota) {
    return City::where('kota', $kota)->get();
});
Route::get('geonameid/negara/{negara}', function($negara) {
    return City::where('negara', $negara)->get();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
