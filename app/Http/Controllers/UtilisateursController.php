<?php

namespace App\Http\Controllers;

use App\utilisateur ;

class UtilisateursController extends Controller
{
   public function liste(){
    $utilisateurs = utilisateur::all();
    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs
    ]);

   }
}
