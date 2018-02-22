<?php

namespace Tests\Browser;

use Tests\TestCase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Link;

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
    public function user_can_click_link(){

        $link = factory(Link::class)->create([
            'url' => 'http://brianwardwell.com',
            'alt_text' => 'brianwardwell.com',
            'description' => 'Brian Wardwell',
        ]);

        $this->browse(function(Browser $browser){
            $browser->visit('wiki')
                ->clickLink('http://brianwardwell.com')
                ->assertSee('Brian Wardwell');
        });
    }
}
