<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
	
	/** @test **/
	function it_load_the_users_list_page()
	    {
		$this->get('/usuarios')
		          ->assertStatus(200)
		          ->assertSee('usuarios');
	}
	
	
	/** @test **/
	
	function it_load_the_users_details_page()
	    {
		$this->get('/usuarios/5')
		          ->assertStatus(200)
		          ->assertSee('Detalle del usuario 5');
	}
	
		
/** @test **/
	
	function crear_nuevo_usuario()
	    {
		$this->get('/usuarios/nuevo')
		          ->assertStatus(200)
		          ->assertSee('Crear nuevo usuario');
	}


}
