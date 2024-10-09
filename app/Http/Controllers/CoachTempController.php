<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Coach;

class CoachTempController extends Controller
{

    public function __construct()
{
    $this->middleware('guest:coach')->except('logout');
}

public function index(){

    $coach = Auth::guard('coach')->user();
    return view('CoachTemp.layout.dashboard',compact('coach'));

}


}
