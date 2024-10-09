<?php

namespace App\Http\Controllers;

use App\Modalmember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberTempController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $member = Auth::guard('member')->user();
        $modals=Modalmember::all();

        $numSports = DB::table('sports')->count();
        $numMembers = DB::table('members')->count();
        $numCoaches = DB::table('coaches')->count();
        $numSubs = DB::table('modalmembers')->count();
        return view('MemberTemp/layout/dashboard',compact('member','modals','numSports','numMembers','numCoaches','numSubs'));
    }

}
