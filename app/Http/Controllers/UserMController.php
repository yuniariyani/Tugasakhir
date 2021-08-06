<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserM;

class UserMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtuser = UserM::all();
        return view('user.user',compact('dtuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.Create-user');
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
               'username' => 'required',
               'email' => 'required',  
               'name' => 'required',
               'level' => 'required',
               'password' => 'required' 
        ]);

        $array = $request->only([
            'username','email','name','level','password'
        ]);

        $array['password'] = bcrypt($array['password']);
        
        $user = UserM::create($array);
        return redirect()->route('user');
             
      

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
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
          $peg = UserM::findorfail($id);
          $peg->delete();
          return back()->with('info','dihapus');
    
    }
}
