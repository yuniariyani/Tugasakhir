<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BantuanDana;
use App\Models\Issue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dtissue = Issue::all(); 
        $nama_bantuan= BantuanDana::all();
        $selected = ""; 
        return view('issue.issue', compact('dtissue','nama_bantuan','selected'));
         
    }
    public function empBantuan($id)
    {
   
        $dtissue = Issue::where('bantuan_dana_id', $id)->get();
        $nama_bantuan = BantuanDana::all();
        $selected = BantuanDana::where('id', $id)->get()->first();
        $selected = $selected->id;
        return view('issue.issue', compact('dtissue', 'nama_bantuan', 'selected'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hin = BantuanDana::all();
        return view ('issue.create-issue',compact('hin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Issue::create([
            'bantuan_dana_id' => $request->bantuan_dana_id,
            'masalah' => $request->masalah,
            'deskripsi' => $request->deskripsi,
            'tingkat' => $request ->tingkat,
            'tgl' => $request->tgl,
             
             
        ]);  

        return redirect('issue');
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
        $peg = Issue::findorfail($id);
        return view ('issue.edit-issue',compact('peg','hin'));
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
        $peg = Issue::findorfail($id);
        $peg->update($request->all());
        return redirect('issue');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Issue::findorfail($id);
        $peg->delete();
        return back()->with('info','dihapus');
    }
}
