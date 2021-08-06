<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPlanning;
use App\Models\BantuanDana;
use Illuminate\Support\Facades\DB;


class DetailKegiatanProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dtplan = DetailPlanning::all();
         return view('bantuan.detail-kegiatan',compact('dtplan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id_dana = $request->id_dana;
        $hin = BantuanDana::all();
        return view ('bantuan.create-detail')->with(['id_dana' => $id_dana, 'hin' => $hin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DetailPlanning::create([
            'bantuan_dana_id' => $request->bantuan_dana_id,
            'kegiatan' => $request->kegiatan,
            'sub_kegiatan' => $request->sub_kegiatan,
            'durasi' => $request->durasi,
            'start' => $request->start,
            'finish' => $request->finish,

             
        ]);  
     
        return redirect ('detailkegiatan/'.$request->id_dana);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_dana = $id;
        $dtplan = DetailPlanning::all()->where('bantuan_dana_id', $id);
        return view('bantuan.detail-kegiatan')->with(['id_dana' => $id_dana, 'dtplan' => $dtplan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $hin = BantuanDana::all();
        $peg = DetailPlanning::findorfail($id);
        return view ('bantuan.Edit-detail',compact('peg','hin'));
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
        $peg = DetailPlanning::findorfail($id);
        $peg->update($request->all());
        return redirect('detail-kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $peg = DetailPlanning::findorfail($id);
          $peg->delete();
          return back()->with('info','dihapus');
    }
}
