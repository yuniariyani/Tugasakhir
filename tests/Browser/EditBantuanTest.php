<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditBantuanTest extends DuskTestCase
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
             ->assertSee('Bantuan Dana Poktan')
             ->visit('/bantuandana')
             ->visit('/edit-bantuan/1')
             ->select( 'relation_group_id','2')
             ->type('kode_bantuan','Y001')
             ->press('Ubah Data')
             ->assertSee('Bantuan Dana Poktan');

        });
    }
}
