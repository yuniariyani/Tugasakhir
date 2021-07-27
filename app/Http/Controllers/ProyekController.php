<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;
use App\Models\DetailPlanning;
use App\Models\RelationGroup;
use Flash;
use Response;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtproyek = Proyek::all(); 
        return view('proyek.proyek', compact('dtproyek'));
         
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = RelationGroup::all();
        return view ('Proyek.create-proyek',compact('hin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        Proyek::create([
            'kode_proyek' => $request->kode_proyek,
            'nama_proyek' => $request->nama_proyek,
            'start_proyek' => $request->start_proyek,
            'finish_proyek' => $request ->finish_proyek,
            'relation_group_id' => $request->relation_group_id,
             
             
        ]);  

        return redirect('proyek');
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
        $peg = Proyek::findorfail($id);
        return view ('proyek.Edit-proyek',compact('peg','hin'));
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
        $peg = Proyek::findorfail($id);
        $peg->update($request->all());
        return redirect('proyek');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $peg = Proyek::findorfail($id);
         $peg->delete();
          return back()->with('info','dihapus');
    }
}
