<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktualcost;
use App\Models\Proyek;
use App\Models\CostBaseline;
use App\Models\DetailAktual;
use App\Models\RelationGroup;
use App\Models\masalah;

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
        $selected = " ";
        return view('dashboard', compact('masalahs', 'nama_kelompok', 'selected'));
    }
}