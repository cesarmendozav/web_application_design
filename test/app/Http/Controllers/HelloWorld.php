<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hello; // Very important to import the model here
class HelloWorld extends Controller 
{ 
  public function sayHello() 
  { 
    return view(
      'hello', [
        "message" => Hello::helloWorldMessage(),
        "name" => Hello::getMyName() // Añade esta línea
      ]
  
  ); 
    
  } 
} 
