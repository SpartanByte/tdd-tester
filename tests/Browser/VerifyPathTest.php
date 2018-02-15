<?php

namespace Tests\Browser;

use Tests\TestCase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// handles all path verification tests
class VerifyPathTest extends DuskTestCase
{

    /** @test */
    public function click_link_and_see_message(){
        $this->browse(function(Browser $browser){
            $browser->visit('/')
                ->press("Press")
                ->assertPathIs('/testpage')
                ->assertSee("You have reached the test page!");
        });
    }

    /** @test */
    public function verify_php_documentation_path(){
        $this->browse(function(Browser $browser){
            $browser->visit('/')
                ->clickLink('PHP Unit Documentation')
                ->asserPathIs('https://phpunit.de/documentation.html');
        });
    }
}
