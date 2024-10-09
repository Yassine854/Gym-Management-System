<?php

namespace App\Http\Controllers;

use App\Modalmember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberProfileController extends Controller
{


    public function index(){
    $modals=Modalmember::all();
    $member = Auth::guard('member')->user();
    return view('MemberTemp/memberprofile/index',compact(['member','modals']));
    }


    public function edit( )
    {
      $member = Auth::guard('member')->user();
      return view('MemberTemp/memberprofile/edit',compact(['member']));

    }

    public function update(Request $request)
    {
        // $coach->update($request->all());
        $member = Auth::guard('member')->user();
        $member->fname=$request->fname;
        $member->lname=$request->lname;
        $member->gender=$request->gender;
        $member->birth=$request->birth;
        $member->address=$request->address;
        $member->tel=$request->tel;
        $member->email=$request->email;
        $member->password=bcrypt($request->password);
        $member->update();
        return view('MemberTemp.layout.dashboard');
    }


}
