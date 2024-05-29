<?php

namespace App\Http\Controllers;

use App\Models\Tbldesk;
use App\Models\Tbldeskhistory;
use Illuminate\Http\Request;
use App\Models\Tblstudents;

class StudentController extends Controller
{
    public function index()
    {
        $students = Tblstudents::all();
        $cnt = $students->count();
        return view('students.managestudent', compact('students'));
    }

    public function detailStudent($studentId)
    {
        $studentDetail = Tblstudents::find($studentId);
        // $deskHistories = Tbldeskhistory::where('stduentId', $studentId)
        //     ->join('tbldesk', 'tbldeskhistory.deaskId', '=', 'tbldesk.id')
        //     ->orderBy('tbldeskhistory.id')
        //     ->get(['tbldeskhistory.*', 'tbldesk.*']);
        // $cnt = $deskHistories->count();

        $deskHistories = Tbldeskhistory::where('stduentId', $studentId)
            ->join('tbldesk', 'tbldeskhistory.deaskId', '=', 'tbldesk.id')
            ->orderBy('tbldeskhistory.id')
            ->get(['tbldeskhistory.*', 'tbldesk.deskNumber', 'tbldesk.isDeskAssign']);

        $deskstatus = $deskHistories->first() ? $deskHistories->first()->isDeskAssign : null;
        $availableDesks = Tbldesk::whereNull('isOccupied')
            ->orWhere('isOccupied', '')
            ->get();

        return view('students.studentdetail', compact('studentDetail', 'deskHistories', 'deskstatus', 'availableDesks'));

        // return view('desk_histories.index', compact('deskHistories', 'deskstatus'));
    }

    public function edit($studentId) {
        $studentDetail = Tblstudents::find($studentId);
        return view('students.editstudent', compact('studentDetail'));
    }

    public function editsubmit(Request $request, $studentId) {
        $studentDetail = Tblstudents::find($studentId);
        $studentDetail->studentName = $request->studentname;
        $studentDetail->studentContactNo = $request->studentcontactno;
        $studentDetail->studentEmailId = $request->studentemail;
        $studentDetail->studentQualification = $request->qualification;
        $studentDetail->studentAddress = $request->address;
        $studentDetail->save();

        return redirect('/admin/manage-student');
    }

    public function delete($studentId) {
        Tblstudents::destroy($studentId);
        return redirect('/admin/manage-student');
    }

    // public function deskHistories($studentId)
    // {

    //     $deskHistories = Tbldeskhistory::where('stduentId', $studentId)
    //         ->join('tbldesk', 'tbldeskhistory.deaskId', '=', 'tbldesk.id')
    //         ->orderBy('tbldeskhistory.id')
    //         ->get(['tbldeskhistory.*', 'tbldesk.*']);

    //     return view('desk_histories.index', compact('deskHistories'));
    // }
}
