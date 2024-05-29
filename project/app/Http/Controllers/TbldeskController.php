<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbldesk;
use App\Models\Tblstudents;

class TbldeskController extends Controller
{
    public function index(){
        $desks = Tbldesk::all();
        return view('home', compact('desks'));
    }

    public function dashboard(){
        $desks = Tbldesk::all();
        $count = TblDesk::all()->count();
        $available = Tbldesk::where('laptopChargerScoket', '!=', '')->count();
        $isocupied = Tbldesk::where('isOccupied', '!=', '')->count();
        $registered = Tblstudents::all()->count();
        return view('dashboard', compact('desks','count','available','isocupied','registered'));
    }

    public function manage(){
        $desks = Tbldesk::all();
        return view('managedesk', compact('desks'));
    }
}
