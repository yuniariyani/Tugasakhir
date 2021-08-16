<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditIssueTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
          $browser->visit('/login')
             ->type('username','admin')
             ->type('password','admin123')
             ->press('Login')
             ->visit('/issue')
             ->visit('/edit-issue/6')
             ->type('masalah','Keterlambatan persedian bahan bagunan batu pondasi I')
             ->press('Ubah Data')
             ->assertSee('Issue Report');
        });
    }
}
