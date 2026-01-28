<?php

use Illuminate\Support\Facades\Route;
Route::view('/', 'index.blade.php')->name('welcome');
Route::view('/about','about')->name('about');
Route::view('/servicios','services')->name('services');
Route::view('/contact','contact')->name('contact');
Route::get('/', function () {
    return view('index');
})->name('index');

//Route::get('mi/ruta/', 'controladorDeLaRuta');
//Route::post();
//Route::put();
//Route::delete();
//Route::patch();
