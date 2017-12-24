<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name, $nickname=null) //se llama al controlador con el metodo por defecto.
    {
        $name=ucfirst($name);
    $nickname=strtoupper($nickname);

    if ($nickname){
    return "Hola {$name}, tu apodo es {$nickname}";
    } else {
    return "Hola {$name}, no tienes apodo";
    }

    }
}
