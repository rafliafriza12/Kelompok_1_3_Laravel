<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(){
        $first = false;
        return view('report', compact('first'));
    }

    public function reportList(Request $request){
        $first = true;
        $fdate = Carbon::parse($request->fromdate);
        $tdate = Carbon::parse($request->todate);
        $results = DB::table('tblstudents')
            ->leftJoin('tbldeskhistory', 'tbldeskhistory.stduentId', '=', 'tblstudents.id')
            ->whereBetween(DB::raw('DATE(assignDate)'), [$fdate, $tdate])
            ->select('tblstudents.*', 'tbldeskhistory.*')
            ->get();
        return view('report', compact('first','fdate','tdate', 'results'));
    }
}
