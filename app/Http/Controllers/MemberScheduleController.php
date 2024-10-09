<?php

namespace App\Http\Controllers;
use App\Task;
use App\Modalmember;
use App\Coach;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MemberScheduleController extends Controller
{


        public function index(){
        $tasks=Task::all();
        $modals=Modalmember::all();
        $coaches=Coach::all();
        $member = Auth::guard('member')->user();
        return view('MemberTemp/memberschedule/index',compact('member','tasks','modals','coaches'));
        }
    }
