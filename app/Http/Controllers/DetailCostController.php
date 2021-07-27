<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostBaseline;
use App\Models\DetailCost;

class DetailCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dtcost = DetailCost::all();
         return view('proyek.cost-detail',compact('dtcost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = CostBaseline::all();
        return view ('proyek.create-detailcost',compact('hin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DetailCost::create([
            'costbaseline_id' => $request->costbaseline_id,
            'item' => $request->item,
            'sub_item' => $request->sub_item,
            'cost_day' => $request->cost_day,
            'cost_hour' => $request->cost_hour,
            'quantity' => $request->quantity,
            'total' => $request->total,
          
        ]);  

         return redirect('detailcost');
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
        $hin = CostBaseline::all();
        $peg = DetailCost::findorfail($id);
        return view ('proyek.edit-detailcost',compact('peg','hin'));
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
        $peg = DetailCost::findorfail($id);
        $peg->update($request->all());
        return redirect('detailcost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = DetailCost::findorfail($id);
        $peg->delete();
        return back()->with('info','dihapus');
    }
    
}
