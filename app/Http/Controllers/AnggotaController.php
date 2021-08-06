<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaTani;
use App\Models\RelationGroup;
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtanggota = AnggotaTani::all();
        return view ('kelompok.anggota',compact('dtanggota'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = RelationGroup::all();
        return view ('kelompok.Create-anggota',compact('hin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        AnggotaTani::create([
            'nama_petani' => $request->nama_petani,
            'nohp' => $request->nohp,
            'jabatan' => $request->jabatan,
            'relation_group_id' => $request->relation_group_id,
             
             
        ]);  

        return redirect('anggota');
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
     * @return Response
     */
   public function edit_function($id)
    {
        $hin = RelationGroup::all();
        $peg = AnggotaTani::findorfail($id);
        return view ('kelompok.Edit-anggota',compact('peg','hin'));
        
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
        $peg = AnggotaTani::findorfail($id);
        $peg->update($request->all());
        return redirect('anggota');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $peg = AnggotaTani::findorfail($id);
          $peg->delete();
          return back()->with('info','dihapus');
    }
}
