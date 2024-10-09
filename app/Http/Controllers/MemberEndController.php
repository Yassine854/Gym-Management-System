<?php

namespace App\Http\Controllers;
use App\End;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MemberEndController extends Controller
{
    public function index(){
        $ends=End::all();
        $member = Auth::guard('member')->user();
        return view('MemberTemp/memberprofile/endsubscription/index',compact(['member','ends']));
    }
}
