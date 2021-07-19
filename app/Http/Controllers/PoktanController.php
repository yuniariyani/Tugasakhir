<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoktanController extends Controller
{
      public function index()
    {
        return view ('kelompok.poktan');
    }
}
