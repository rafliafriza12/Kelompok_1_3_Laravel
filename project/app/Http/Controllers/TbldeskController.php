<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbldesk;

class TbldeskController extends Controller
{
    public function index(){
        $desks = Tbldesk::all();
        return view('home', compact('desks'));
    }
}
