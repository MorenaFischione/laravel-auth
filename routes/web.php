<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware('auth')->get('/admin', 'Admin\HomeController@index')->name('admin.home');

Route::middleware('auth') //devi essere autenticato
    ->namespace('Admin') // prendi i controller delle route tue figlie a partire dalla cartella Admin/
    ->name('admin.') // aggiunge admin. a tutti i name
    ->prefix('admin')  // inserisci come prefisso nelle URI di tutte le route figlie admin 
    ->group(function () { // e raggruppale in:
        Route::get('/', 'HomeController@index')->name('home');
    });