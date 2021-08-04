<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RelationGroup;
use App\Models\masalah;

class AdminController extends Controller
{
  public function index()
  {
      $masalahs = masalah::where('status','Tinggi')->get();
      $nama_kelompok = RelationGroup::all();
      $selected = " ";
      return view('dashboard', compact('masalahs', 'nama_kelompok', 'selected'));
  }
}
