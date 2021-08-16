<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BantuanTest extends DuskTestCase
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
        ->visit('/create-bantuan')
        ->select('relation_group_id','2')
        ->type('kode_bantuan','Test')
        ->select('kategori_bantuan','Operasional')
        ->type('nama_bantuan','test')
        ->select('status','Progress')
        ->press('Simpan Data')
        ->assertSee('Bantuan Dana Poktan');

        });
    }
}
