<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class TbladminController extends Controller
{
    public function index(){
        return view('adminlogin');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        
       $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }else{
            return redirect('/admin/login')
            ->withInput($request->only(['username', 'password']));
        }

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
    }
}
