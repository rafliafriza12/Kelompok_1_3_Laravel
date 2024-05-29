<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TbladminController extends Controller
{
    public function index(){
        return view('adminlogin');
    }

    public function authenticate(Request $request){
        
       $credentials = $request->validate([
            'UserName' => ['required'],
            'Password' => ['required'],
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return redirect('/admin/login')
            ->withInput($request->only(['UserName', 'Password']));
        }

    }
}
