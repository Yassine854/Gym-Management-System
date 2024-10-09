<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Sport;
use App\Coach;
use App\Modalmember;
use Illuminate\Support\Facades\Auth;
class MemberListController extends Controller
{
    public function index()
    {
        $coach = Auth::guard('coach')->user();
        $modals=Modalmember::all();
        $members=Member::all();
        return view('CoachTemp/memberlist/index',compact('coach','members','modals'));
        }

    }
