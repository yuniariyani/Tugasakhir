<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PlanTest extends DuskTestCase
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
             ->press('Tambah Planning')
             ->select('bantuan_dana_id','2')
             ->select('kegiatan','Eksekusi/Pembangunan')
             ->type('sub_kegiatan','Beli Batu-bata XP')
             ->type('durasi','1')
             ->type('start','08/26/2021')
             ->type('finish','08/26/2021')
             ->press('Simpan Data')
             ->assertSee('Detail Planning Bantuan');
        });
    }
}
