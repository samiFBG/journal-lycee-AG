<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Utilisateur extends model
{
   protected $fillable = ['pseudo' ,'email' , 'password'];
    protected $table = 'utilisateur';
}

?>