<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RelationGroup;
class RelationgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtkelompok = RelationGroup::all();
        return view ('kelompok.kelompoktani',compact('dtkelompok'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kelompok.Create-KelompokTani');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           RelationGroup::create([
            'nama_kelompok' => $request->nama_kelompok,
            'total_anggota' => $request->total_anggota,
            'wilayah_lahan' => $request->wilayah_lahan,
            'alamat_lahan' => $request->alamat_lahan,
          
        ]);

           return redirect('kelompoktani');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pig = RelationGroup::findorfail($id);
         $pig->delete();
         return back()->with('info','dihapus');
    }
}
