<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostBaseline;
use App\Models\DetailCost;
use App\Models\Proyek;

class CostBaselineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtcost = CostBaseline::all();
        return view('proyek.costbaseline',compact('dtcost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = Proyek::all();
        return view ('Proyek.create-cost',compact('hin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CostBaseline::create([
            'proyek_id' => $request->proyek_id,
            'kode_anggaran' => $request->kode_anggaran,
            'total_anggaran' => $request->total_anggaran,
             
        ]);  

        return redirect('costbaseline');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtcost = DetailCost::all()->where('costbaseline_id', $id);
        return view('proyek.cost-detail',compact('dtcost'));
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
       $peg = CostBaseline::findorfail($id);
       return view ('proyek.edit-cost',compact('peg','hin'));
    
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
        $peg = CostBaseline::findorfail($id);
        $peg->update($request->all());
        return redirect('costbaseline');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = CostBaseline::findorfail($id);
        $peg->delete();
        return back()->with('info','dihapus');
    }
}
