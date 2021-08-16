<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class IssueTest extends DuskTestCase
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
             ->visit('/create-issue')
             ->type('tgl','08/04/2021')
             ->select('bantuan_dana_id','2')
             ->type( 'masalah','Test')
             ->type('deskripsi','Test')
             ->select('tingkat','Sedang')
             ->press('Simpan Data')
             ->assertSee('Issue Report');

        });
    }
}
