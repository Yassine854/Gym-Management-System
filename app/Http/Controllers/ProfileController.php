<?php

namespace App\Http\Controllers;
use App\Coach;
use App\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit( )
    {
      $coach = Auth::guard('coach')->user();
      $sports=Sport::all();
      return view('CoachTemp.layout.profile',compact(['coach','sports']));

    }



    public function update(Request $request)
    {
        // $coach->update($request->all());
        $coach = Auth::guard('coach')->user();
        $coach->fname=$request->fname;
        $coach->lname=$request->lname;
        $coach->gender=$request->gender;
        $coach->height=$request->height;
        $coach->weight=$request->weight;
        $coach->address=$request->address;
        $coach->birth=$request->birth;
        $coach->tel=$request->tel;
        $coach->email=$request->email;
        $coach->password=bcrypt($request->password);
        $coach->job=$request->job;

        // $input=$request->all();
        $coach->image=$request->image;
        if($request->hasFile('image'))
        {
           $destinationPath = 'images/clients/' ;
           $file = $request->file('image') ;
           $fileName = $file->getClientOriginalName() ;
           $file->move($destinationPath,$fileName);
           $path=$request->file('image')->storeAs($destinationPath,$fileName);
           $input['image']=$fileName;
        }
           $coach->update();
        return view('CoachTemp.layout.dashboard');
    }
}
