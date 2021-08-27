<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $role = DB::table('users')->where('id', $id)->select('level')->first();
        switch ($role->level){
            case 'admin':
                session(['permission' => 'admin']);
                return view ('home');
                break;

            case 'penyuluh':
                session(['permission' => 'penyuluh']);
                return view ('home');
                break;
        }
    }
}
