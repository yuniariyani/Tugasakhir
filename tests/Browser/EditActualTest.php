<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditActualTest extends DuskTestCase
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
             ->visit('/bantuandana')
             ->visit('/detailcost')
             ->visit('/edit-detailak/28')
             ->type('spesifikasi','Test lagi')
             ->press('Ubah Data')
             ->assertSee('Rincian');
        });
    }
}
