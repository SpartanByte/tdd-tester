<?php

namespace Tests\Feature;

use Auth;
use App\User;
use Tests\DuskTestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    use DatabaseMigrations;

    function test_successful_login()
    {
        $testy = factory(User::class)->create([
            'email' => 'testy@example.com',
            'password' => bcrypt('secret'),
        ]);

        $response = $this->post('login', [
            'email' => 'testy@example.com',
            'password' => 'secret',
        ]);

        $this->assertTrue(Auth::check());
        $this->assertTrue(Auth::user()->is($testy));
    }
}