<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BantuanDana;
use App\Models\DetailPlanning;
use App\Models\RelationGroup;
use Flash;
use Response;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtbantuan = BantuanDana::all(); 
        return view('bantuan.bantuan-dana', compact('dtbantuan'));
         
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = RelationGroup::all();
        return view ('bantuan.create-bantuan',compact('hin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        BantuanDana::create([
            'kode_bantuan' => $request->kode_bantuan,
            'kategori_bantuan' => $request->kategori_bantuan,
            'nama_bantuan' => $request->nama_bantuan,
            'status' => $request->status,
            'relation_group_id' => $request->relation_group_id,
            
             
        ]);  

        return redirect('bantuandana');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $dtplan = DetailPlanning::all()->where('proyek_id', $id);
       // return view('proyek.detail-kegiatan',compact('dtplan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hin = RelationGroup::all();
        $peg = BantuanDana::findorfail($id);
        return view ('bantuan.edit-bantuan',compact('peg','hin'));
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
        $peg = BantuanDana::findorfail($id);
        $peg->update($request->all());
        return redirect('bantuandana');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $peg = BantuanDana::findorfail($id);
         $peg->delete();
         return back()->with('info','dihapus');
    }
}
