<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditPlanTest extends DuskTestCase
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
             ->visit('/detailkegiatan/1')
             ->assertSee('Detail Planning Bantuan')
             ->visit('/edit-detail/51')
             ->type('kegiatan','Pembelian')
             ->press('Ubah Data');
            
        });
    }
}
