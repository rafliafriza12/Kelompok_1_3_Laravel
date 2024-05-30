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


    public function createStudent()
    {
        return view('students.addstudent');
    }

    public function createStudentSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'registrationNumber' => 'required',
            'studentName' => 'required',
            'studentContactNo' => 'required',
            'studentEmailId' => 'required',
            'studentQualification' => 'required',
            'studentAddress' => 'required',
        ]);
        
        Tblstudents::create($validatedData);

        return redirect('/admin/manage-student');
    }

    public function detailStudent($studentId)
    {
        $studentDetail = Tblstudents::find($studentId);

        $deskHistories = Tbldeskhistory::where('stduentId', $studentId)
            ->join('tbldesk', 'tbldeskhistory.deaskId', '=', 'tbldesk.id')
            ->select('tbldeskhistory.*', 'tbldesk.deskNumber')
            ->get();
            
        $availableDesks = Tbldesk::where('isOccupied', '0')->orWhere('isOccupied', '')->get();

        return view('students.studentdetail', compact('studentDetail', 'deskHistories', 'availableDesks'));

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

    public function unassign(Request $request, $studentId)
    {
        $student = Tblstudents::find($studentId);
        $student->isDeskAssign = 0;
        $student->save();

        $deskHistory = Tbldeskhistory::where('stduentId', $studentId)
            ->whereNull('unassignDate')
            ->first();

        $desk = Tbldesk::find($deskHistory->deaskId);
        $desk->isOccupied = '0';
        $desk->save();

        $deskHistory->unassignDate = now();
        $deskHistory->unassignedRemark = $request->unassignremark;
        $deskHistory->save();

        return redirect()->back();
    }

    public function assign (Request $request, $studentId)
    {
        $student = Tblstudents::find($studentId);
        $student->isDeskAssign = 1;
        $student->save();

        $desk = Tbldesk::find($request->deskno);
        $desk->isOccupied = '1';
        $desk->save();

        $deskHistory = new Tbldeskhistory();
        $deskHistory->stduentId = $studentId;
        $deskHistory->deaskId = $request->deskno;
        $deskHistory->assignRemark = $request->remark;
        $deskHistory->assignDate = now();
        $deskHistory->save();

        return redirect()->back();
    }
}
