<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /** @test */
    function login_button()
    {
        $testy = factory(User::class)->create([
            'email' => 'testy@example.com',
            'password' => bcrypt('secret'),
        ]);


        $this->browse(function(Browser $testy){
            $testy->visit('login')
                ->type('email', 'testy@example.com')
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }
}
