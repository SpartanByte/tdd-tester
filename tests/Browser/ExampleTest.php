<?php

namespace Tests\Browser;

use Tests\TestCase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertPathIs('/');
        });
    }

    /** @test */
    public function click_login(){
        $this->browse(function(Browser $browser){
            $browser->visit('/login')
                ->clickLink("Register")
                ->assertPathIs('/register');

            $registerValue = $browser->text('.dusk-test');
            var_dump($registerValue);
        });
    }
}
