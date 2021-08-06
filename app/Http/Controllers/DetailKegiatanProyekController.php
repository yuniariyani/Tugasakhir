<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPlanning;
use App\Models\Proyek;


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
         return view('proyek.detail-kegiatan',compact('dtplan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = Proyek::all();
        return view ('proyek.create-detail',compact('hin'));
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
            'proyek_id' => $request->proyek_id,
            'kegiatan' => $request->kegiatan,
            'sub_kegiatan' => $request->sub_kegiatan,
            'durasi' => $request->durasi,
            'start' => $request->start,
            'finish' => $request->finish,
             
        ]);  

         return redirect('detail-kegiatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtplan = DetailPlanning::all()->where('proyek_id', $id);
        return view('proyek.detail-kegiatan',compact('dtplan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hin = Proyek::all();
        $peg = DetailPlanning::findorfail($id);
        return view ('proyek.Edit-detail',compact('peg','hin'));
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
