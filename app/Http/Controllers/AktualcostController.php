<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktualcost;
use App\Models\Proyek;
use App\Models\CostBaseline;
use App\Models\DetailAktual;

class AktualcostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtaktual = Aktualcost::all();
        return view('aktual.aktualcost',compact('dtaktual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = Proyek::all();
        $hun = CostBaseline::all();
    
        return view ('aktual.create-aktualcost',compact('hin','hun'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          Aktualcost::create([
            'proyek_id' => $request->proyek_id,
            'costbaseline_id' => $request->costbaseline_id,
            'pengeluaran' => $request->pengeluaran,
             
        ]);  

        return redirect('aktualcost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtaktual = DetailAktual::all()->where('aktual_id', $id);
        return view('aktual.detailaktual',compact('dtaktual'));
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
       $hun = CostBaseline::all();
       $peg = Aktualcost::findorfail($id);
       return view ('aktual.edit-aktualcost',compact('peg','hin','hun'));
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
        $peg = Aktualcost::findorfail($id);
        $peg->update($request->all());
        return redirect('aktualcost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Aktualcost::findorfail($id);
        $peg->delete();
        return back()->with('info','dihapus');
    }
}
