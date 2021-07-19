<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlokLahan;
use App\Models\AnggotaTani;
class KomoditasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $dtblok = BlokLahan::all();
     return view ('kelompok.komoditas',compact('dtblok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $hun = AnggotaTani::all();
           return view ('kelompok.Create-komoditas',compact('hun'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          BlokLahan::create([
            'anggota_id' => $request->anggota_id,
            'nama_blok' => $request->nama_blok,
            'luas_blok' => $request->luas_blok,
            'komoditas' => $request->komoditas,
            'tanggal_tanam' => $request->tanggal_tanam,
          ]);

          return redirect('komoditas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hun = AnggotaTani::all();
        $pug = BlokLahan::findorfail($id);
        return view ('kelompok.Edit-komoditas', compact('pug','hun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pug = BlokLahan::findorfail($id);
        $pug->update($request->all());
        
        return redirect('komoditas');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $peg = BlokLahan::findorfail($id);
         $peg->delete();
         return back()->with('info','dihapus');
        
    }
}
