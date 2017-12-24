<?php

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
    //return view('welcome');
    return 'HOME';
});

Route::get('/usuarios', function () {
    return 'Usuarios';
});

Route::get('/usuarios/{id}', function ($id) {
    return "Detalle del usuario {$id}";
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return "Crear nuevo usuario";
});

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname=null) {
    if ($nickname){
    return "Hola {$name}, tu apodo es {$nickname}";
    } else {
    return "Hola {$name}, no tienes apodo";
    }
});