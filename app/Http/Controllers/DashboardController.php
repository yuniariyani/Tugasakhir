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
use App\Models\pendapatan;
use App\Models\BantuanDana;
use App\Models\Penyuluh;
use Illuminate\Support\Facades\DB;

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

        $penyuluh = Penyuluh :: count('nama_penyuluh');

        $anggota_kelompok = AnggotaTani::count('nama_petani');

        $rr = pendapatan::count('satuan');

        $result=DB::select(DB::raw("select count(*) as total_status, status from bantuan_dana group by status"));
        $chartData="";
        foreach($result as $list){
            $chartData.="['".$list->status."', ".$list->total_status."],";
        }
        $arr['chartData']=rtrim($chartData,",");

        return view('dashboard',compact('total_kelompok','anggota_kelompok', 'masalahs','nama_kelompok',
        'penyuluh','chartData'));
   }

}