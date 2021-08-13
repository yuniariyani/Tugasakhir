<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktualcost;
use App\Models\Proyek;
use App\Models\CostBaseline;
use App\Models\DetailAktual;
use App\Models\RelationGroup;
use App\Models\masalah;
use App\Models\AnggotaTani;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        $masalahs = masalah::where('status','Tinggi')->get();
        $nama_kelompok = RelationGroup::all();
  
        $total_kelompok = RelationGroup::count('nama_kelompok');
        //$penyuluh = //nama db penyulu :: conut(');
        $anggota_kelompok = AnggotaTani::count('nama_petani');
        //$hasilpanen =


      return view ('dashboard')->with([
          'total_kelompok' => $total_kelompok,
          'anggota_kelompok' => $anggota_kelompok,
          'masalahs' => $masalahs,
          'nama_kelompok' => $nama_kelompok,
      ]);
   }
}