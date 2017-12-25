<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index() 
    {
		

		if (request()->has('empty')) {
			$users = [];
		} else {

		$users = [ 'Joel', 'Luis', 'Antonio', 'Pedro'];
         $title = "Listado de usuarios";
          	
		
		// 		return view('users', [
		        // 		'users' => $users,
		        // 		'title' => 'Listado de usuarios'
		        // 		]);
		
		// 		return view('users')
		        // 		->with('users',$users)
		        // 		->with('title',$title);
		
		// 		dd(compact('title','users'));
		
		//r		eturn view('users', compact('title','users'));
		//C		ompact -> array asociativo.
		       
		//C		ompact -> array asociativo.
           	return view('users2', compact('title','users'));
		}
	}	
	
     public function show($id) { return "Detalle del usuario {$id}"; }
     public function create() { return "Crear nuevo usuario"; }
	
    
}
