<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailAktual;
use App\Models\BantuanDana;

class DetailAktualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dtakt = DetailAktual::all();
         return view('cost-baseline.cost-detail',compact('dtakt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = BantuanDana::all();
        return view ('aktual.create-detailaktual',compact('hin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            
          'tgl' => 'required',
          'bantuan_dana_id' => 'required',
          'item' => 'required',
          'sub_item' => 'required',
          'spesifikasi' => 'required',
          'cost_day' => 'required',
          'quantity' => 'required',
          'total' => 'required',
          'foto' =>'required|image|mimes:jepg,png,jpg|max:2048'
      ]);
       
      $image = $request->foto;
      $new_image = rand().'.'.$image->getClientOriginalExtension();

      $data_progress = new DetailAktual;
      $data_progress->tgl= $request->tgl;
      $data_progress->bantuan_dana_id = $request->bantuan_dana_id;
      $data_progress->item = $request->item;
      $data_progress->sub_item = $request->sub_item;
      $data_progress->spesifikasi = $request->spesifikasi;
      $data_progress->cost_day = $request->cost_day;
      $data_progress->quantity = $request->quantity;
      $data_progress->total = $request->total;
      $data_progress->foto = $new_image;

      $image->move(public_path('img'), $new_image);
      $data_progress->save();

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
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hin = Aktualcost::all();
        $dt = DetailAktual::findorfail($id);
        return view('aktual.edit-detailaktual', compact('dt','hin'));
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
        $old_image_name=$request->hidden_image;
        $image = $request->file('foto');

        if($image != ''){

          $request->validate([
          'aktual_id' => 'required',
          'tgl' => 'required',
          'item' => 'required',
          'sub_item' => 'required',
          'cost_day' => 'required',
          'quantity' => 'required',
          'total' => 'required',
          'foto' =>'required|image|mimes:jepg,png,jpg|max:2048',

      ]);
      $image_name = $old_image_name;
      $image->move(public_path('img'), $image_name);

        }else{
         $request->validate([
          'aktual_id' => 'required',
          'tgl' => 'required',
          'item' => 'required',
          'sub_item' => 'required',
          'cost_day' => 'required',
          'quantity' => 'required',
          'total' => 'required',
          
      ]);

      $image_name = $old_image_name;

    }
      $data_progress = array(
      'aktual_id' => $request->aktual_id,
      'tgl' => $request->tgl,
      'item' => $request->item,
      'sub_item' => $request->sub_item,
      'cost_day' => $request->cost_day,
      'quantity' => $request->quantity,
      'total' => $request->total,
      'foto' => $image_name,
    );
      $data  = DetailAktual::find($id);
      $data->update($data_progress);
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
        $peg = DetailAktual::findorfail($id);
        $peg->delete();
        return back()->with('info','dihapus');
    }
}
