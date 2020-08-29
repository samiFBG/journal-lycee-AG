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

Route::get('/utilisateur','UtilisateursController@liste') ;
Route::get('/adm/inscription', 'InscriptionController@formulaire');


Route::post('/adm/inscription', 'InscriptionController@traitement');