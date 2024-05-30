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

    public function editDeskPage($id){
        $row = Tbldesk::where('id',$id)->first();
        return view('editdesk', compact('row'));
    }

    public function editDesk(Request $request, $id){
        $request->validate([
            'desknumber' => 'required',
        ]);

        try {
            $agreeTerms = $request->input('laptopchargersocket',false);
            $desk = Tbldesk::where('id',$id)->first();
            $desk->deskNumber = $request->desknumber;
            if($agreeTerms == false){
                $desk->laptopChargerScoket = '';
            }
            if($agreeTerms == null){
                $desk->laptopChargerScoket ='Yes';
            }
            $desk->save();
            return redirect('/admin/manage');
        } catch (\Throwable $th) {
            return redirect('/admin/desk/'.$id);
        }
        
    }

    public function createDeskPage(){
        return view('adddesk');
    }

    public function createDesk(Request $request){
        $request->validate([
            'deskNumber' => 'required|unique:tbldesk,deskNumber',
        ]);
        
        try {
            $agreeTerms = $request->input('laptopchargersocket',false);
            if($agreeTerms == false){
                Tbldesk::create([
                    'deskNumber' => $request->deskNumber,
                    'laptopChargerScoket' => '',
                    'isOccupied' => '',
                    ''
                ]);
            }
            if($agreeTerms == "Yes"){
                Tbldesk::create([
                    'deskNumber' => $request->deskNumber,
                    'laptopChargerScoket' => 'Yes',
                    'isOccupied' => '',
                ]);
            }
            return redirect('/admin/manage');
        } catch (\Throwable $th) {
            return redirect('/admin/add-desk');
        }
    }

    public function deleteDesk($id){
        Tbldesk::destroy($id);
        return redirect('/admin/manage');
    }
}
