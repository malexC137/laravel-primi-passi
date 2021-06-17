<?php

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


Route::get('/', function () {
    return view('home', [
        "name" => "Simone",
        "surname" => "Maletta"
    ]);
});

Route::get('/contacts', function () {
    return ("simomalex46@gmail.com");
})->name("contacts");

Route::get('/adress', function () {
    return ("Khaosan Road - Bangkok");
})->name("adress");
