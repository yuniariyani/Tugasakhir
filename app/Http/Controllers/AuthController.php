<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
        public function index(){

        return view('login');

    }
    public function proses_login(Request $request){
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
            );

            $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)){

                $user = Auth::user();
                if ($user->level == 'admin'){
                    return redirect()->intended('admin');
                }
                elseif ($user->level == 'penyuluh'){
                    return redirect()->intended('penyuluh');
                }
                return redirect()->intended('/');
            }
            return redirect ('login');
        }

        public function logout(Request $request){
            $request->session()->flush();
            Auth::logout();
            return Redirect('login');
        }
}
