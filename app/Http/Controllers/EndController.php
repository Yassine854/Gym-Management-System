<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use App\coach;
use App\Member;
use App\Modalmember;
use App\End;
use Illuminate\Support\Facades\DB;
class EndController extends Controller
{
    public function index(Request $request)
    {   $ends=End::all();
        $sports=Sport::all();
        $members=Member::all();
        $coaches=Coach::all();
        $date=date('Y-m-d');
        $modals=Modalmember::all();
        $modals=Modalmember::where('end','<',$date)->update(['status'=>0]);
        $modals=Modalmember::where('end','<',$date)->get();
        return view('AdminTemp/subscriptions/end/index',compact('ends','modals','members','coaches','sports'));
    }

    public function destroy(Request $request,$id){
        $end=End::find($id);
        $end->delete();
        return redirect()->route('end.index');
    }
}
