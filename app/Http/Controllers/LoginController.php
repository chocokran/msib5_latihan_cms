<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index',[
            'title'=>'login'
        ]);
    }

    public function login(Request $request){
        $info = $request->validate([
            'email' => ['required','email:dns'],
            'password' => 'required'
        ]);
        if(Auth::attempt($info)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        // dd($info);

        return back()->with('gagal', 'Email atau Password salah!');
    }

    public function logout(){
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/');
    }
}
