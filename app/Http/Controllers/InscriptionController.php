<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function formulaire(){
        return view('inscription');
    }
    public function traitement(){
        request()->validate([
            'pseudo' =>['required'],
            'email' =>['required','email'],
            'password' =>['required','confirmed','min:8'],
            'password_confirmation' =>['required'],
        ],[
           'password.min' =>'pour des raison de securiter votre mot de passe doit faire :min caracteres' 
        ]);
        $utilisateur = App\utilisateur::create([
            'pseudo' => request('pseudo'),
            'email'=> request('email'),
           'password' => bcrypt(request('password')),
        ]);
        return "nous avons recu votre email qui est ".request('email');
    }
}
