<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	    {
		
		$users = [
            'Joel',
            'Luis',
            'Antonio',
            'Pedro'
            
		];
		
        $title ="Listado de usuarios";


		// return view('users', [
        //     'users' => $users,
        //     'title' => 'Listado de usuarios'
        //     ]);

		// return view('users')
        //     ->with('users',$users)
        //     ->with('title',$title);
            
       // dd(compact('title','users'));

        //return view('users', compact('title','users')); //Compact -> array asociativo.
        return view('users2', compact('title','users')); //Compact -> array asociativo.    
	}
	
	public function show($id)
	{
		return "Detalle del usuario {$id}";
	}
	
	public function create()
	{
		return "Crear nuevo usuario";
	}
	
}
