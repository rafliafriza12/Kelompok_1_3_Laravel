<?php

namespace App\Http\Controllers;

use App\Models\Tblstudents;
use Illuminate\Http\Request;

class ManageAssignController extends Controller
{
    public function index(){
        $students = Tblstudents::all();
        return view('manageassign.assignUnassign', compact('students'));
    }
}
