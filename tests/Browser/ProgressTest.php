<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProgressTest extends DuskTestCase
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
             ->visit('/progress')
             ->assertSee('Progress Report')
             ->visit('/createprogress')
             ->select('bantuan_dana_id','2')
             ->type('progress','test')
             ->type( 'tgl','08/09/2021')
             ->attach( 'foto','absolutePathToFile')
             ->press('Simpan Data')
             ->assertSee('Progress Report');
        });
    }
}
