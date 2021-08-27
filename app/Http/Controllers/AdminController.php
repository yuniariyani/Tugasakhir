<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RelationGroup;
use App\Models\masalah;
use App\Models\AnggotaTani;
use App\Models\hasil_panen;

class AdminController extends Controller
{
      public function index(){

        $masalahs = masalah::where('status','Tinggi')->get();
        $nama_kelompok = RelationGroup::all();
  
        $total_kelompok = RelationGroup::count('nama_kelompok');
        //$penyuluh = //nama db penyulu :: conut(');
        $anggota_kelompok = AnggotaTani::count('nama_petani');
        
        $hasilpanen = hasil_panen::count('satuan');


      return view ('dashboard')->with([
          'total_kelompok' => $total_kelompok,
          'anggota_kelompok' => $anggota_kelompok,
          'masalahs' => $masalahs,
          'nama_kelompok' => $nama_kelompok,
          'satuan' => $hasilpanen,
        ]);

    }
}
