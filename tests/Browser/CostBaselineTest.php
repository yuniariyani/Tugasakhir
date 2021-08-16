<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CostBaselineTest extends DuskTestCase
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
             ->visit('/detailcost/1')
             ->visit('/create-detailcost')
             ->select('bantuan_dana_id','2')
             ->select('item','Bahan/Bahan Bangunan')
             ->type('sub_item','Pisau')
             ->type('spesifikasi','test')
             ->type('cost_day','5000')
             ->type('quantity','1')
             ->type('total','25000')
             ->press('Simpan Data')
             ->assertSee('Rincian Anggaran');
             

        });
    }
}
