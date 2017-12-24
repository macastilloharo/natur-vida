<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @tests **/ 
      function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/miguel/mangel')
            ->assertStatus(200)
            ->assertSee('Hola Miguel, tu apodo es MANGEL');
                
    }

    /** @tests **/
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/miguel')
            ->assertStatus(200)
            ->assertSee('Hola Miguel, no tienes apodo');
}

}