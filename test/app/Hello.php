<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
    public static function helloWorldMessage() 
     { 
        return "HELLO WORLD!"; 
     } 
      // Nuevo método para devolver tu nombre
      public static function getMyName() 
    { 

      return "Cesar"; 
   
   } 
}
