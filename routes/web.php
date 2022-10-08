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
    return view('welcome');
});



Route::get('show',\App\Http\Livewire\Show::class)->name('show');

Route::get('/resultados',\App\Http\Livewire\Resultados::class)->name('resultados');

//Route::get('/editar',\App\Http\Livewire\Editar::class)->name('editar');


