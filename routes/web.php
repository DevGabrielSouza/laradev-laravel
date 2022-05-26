<?php

use App\Http\Controllers\PropertyController;
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

Route::controller(PropertyController::class)->group(function(){
    Route::get('/imoveis', 'index')->name('property.index');
    Route::get('/imoveis/novo', 'create')->name('property.create');
    Route::post('/imoveis/store', 'store')->name('property.store');
});
