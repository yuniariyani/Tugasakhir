<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\BantuanDana;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dtprogress = Progress::all();
        $nama_kelompok = BantuanDana::all();
        $selected = ""; 
        return view('progress-report.progress', compact('dtprogress','nama_kelompok','selected'));
    }
    
    public function empKode($id)
    {
   
        $dtprogress = Progress::where('bantuan_dana_id', $id)->get();
        $nama_kelompok = BantuanDana::all();
        $selected = BantuanDana::where('id', $id)->get()->first();
        $selected = $selected->id;
        return view('progress-report.progress', compact('dtprogress', 'nama_kelompok', 'selected'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = BantuanDana::all();
        return view ('progress-report.create-progress',compact('hin'));
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
          'progress' => 'required',
          'foto' =>'required|image|mimes:jepg,png,jpg|max:2048'
      ]);
     
      $image = $request->foto;
      $new_image = rand().'.'.$image->getClientOriginalExtension();

      $data_progress = new Progress;
      $data_progress->bantuan_dana_id = $request->bantuan_dana_id;
      $data_progress->progress = $request->progress;
      $data_progress->tgl = $request->tgl;
      $data_progress->foto = $new_image;

      $image->move(public_path('img'), $new_image);
      $data_progress->save();

      return redirect('progress');
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
        $hin = BantuanDana::all();
        $dt = Progress::findorfail($id);
        return view('progress-report.edit-progress', compact('dt','hin'));
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
          'bantuan_dana_id' => 'required',
          'tgl' => 'required',
          'progress' => 'required',
          'foto' =>'required|image|mimes:jepg,png,jpg|max:2048'
      ]);
      $image_name = $old_image_name;
      $image->move(public_path('img'), $image_name);

        }else{
         $request->validate([
          'bantuan_dana_id' => 'required',
          'tgl' => 'required',
          'progress' => 'required', 
            
      ]);

      $image_name = $old_image_name;

    }
      $data_progress = array(
      'bantuan_dana_id' => $request->bantuan_dana_id,
      'progress' => $request->progress,
      'tgl' => $request->tgl,
      'foto' => $image_name,
    );
      $data  = Progress::find($id);
      $data->update($data_progress);
      return redirect('progress');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Progress::findorfail($id);
        $peg->delete();
        return back()->with('info','dihapus');
    }
    
}
