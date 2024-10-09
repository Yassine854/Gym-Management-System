<?php

namespace App\Http\Controllers;
use App\Coach;
use App\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class CoachController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $coaches=Coach::all();
        $date=date('Y-m-d');
        foreach($coaches as $coach){
            if ($coach->econtract<$date)
                $coach->delete();
        }
        return view('AdminTemp/coaches/index',compact('coaches'));
    }


    public function create()
    {
        $sports=Sport::all();
         return view('AdminTemp/coaches/create',compact('sports'));
    }




    public function store(Request $request)
    {

        $request->validate(
            [
                'cin' => 'required','fname' => 'required', 'lname' => 'required', 'gender' => 'required', 'birth' => 'required','address' => 'required',
                'tel' => 'required|min:8|max:8|unique:coaches|unique:members', 'scontract' => 'required|after_or_equal:today','econtract' => 'required|after:scontract', 'email' => 'required|unique:members|unique:coaches|unique:users','password' => 'required|min:8','image' => 'required',
            ],
            [
                'cin.required' => 'The CIN is required.','image.required' => 'The image is required.','scontract.required' => 'The start of contract date is required.','scontract.after_or_equal' => 'The start of contract must be a date after or equal today.','econtract.required' => 'The end of contract date is required.','address.required' => 'The address is required.','fname.required' => 'The first name is required.', 'lname.required' => 'The last name is required.', 'birth.required' => 'The birthday is required.', 'tel.required' => 'The phone number is required.', 'password.required|max:20' => 'The password is required.', 'email.required' => 'The email is required.', 'password.min' => 'The password must be at least 8 characters.', 'tel.min' => 'The phone Number must be composed of 8 numbers', 'tel.max' => 'The phone Number must be composed of 8 numbers.', 'tel.unique' => 'This phone Number is already in use.'
            ]
        );

        $coach=new Coach();
        $coach->fname=$request->fname;
        $coach->lname=$request->lname;
        $coach->cin=$request->cin;
        $coach->gender=$request->gender;
        $coach->scontract=$request->scontract;
        $coach->econtract=$request->econtract;
        $coach->sports_id=$request->sports_id;
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


        // $pass = Hash::make($request->input('pass'));
        // DB::table('coachts')->insert([
        //     [
        //     'name' =>$request->input('fname'),
        //     'email' => $request->input('email'),
        //     'password' => $pass,
        //     ]
        // ]);

        $coach->save();
        return redirect()->route('coaches.index')->with('success','The coach has been added successfully.');
    }



    public function show($id)
    {
        //
    }

    public function edit(Coach $coach)
    {
      $sports=Sport::all();
      return view('AdminTemp/coaches/edit',compact(['coach','sports']));

    }

    public function update(Request $request ,Coach $coach)
    {
        // $coach->update($request->all());
        $request->validate(
            [    'cin' => ['required',
            Rule::unique('coaches')->ignore($coach->id)],
                'fname' => 'required', 'lname' => 'required', 'gender' => 'required', 'birth' => 'required','address' => 'required',
                'tel' => 'min:8|max:8|unique:members', 'scontract' => 'required','econtract' => 'required|after:scontract','email' => ['required','unique:members','unique:users',
                Rule::unique('coaches')->ignore($coach->id)],'password' => 'required|min:8','image' => 'required','tel' => ['required',
                Rule::unique('coaches')->ignore($coach->id),
                ]
            ],
            [
                'cin.required' => 'The CIN is required.','image.required' => 'The image is required.','scontract.required' => 'The start of contract date is required.','econtract.required' => 'The end of contract date is required.','address.required' => 'The address is required.','fname.required' => 'The first name is required.', 'lname.required' => 'The last name is required.', 'birth.required' => 'The birthday is required.', 'tel.required' => 'The phone number is required.', 'password.required|max:20' => 'The password is required.', 'email.required' => 'The email is required.', 'password.min' => 'The password must be at least 8 characters.', 'tel.min' => 'The phone Number must be composed of 8 numbers', 'tel.max' => 'The phone Number must be composed of 8 numbers.', 'tel.unique' => 'This phone Number is already in use.'
            ]
        );

        $coach->fname=$request->fname;
        $coach->lname=$request->lname;
        $coach->cin=$request->cin;
        $coach->gender=$request->gender;
        $coach->scontract=$request->scontract;
        $coach->econtract=$request->econtract;
        $coach->sports_id=$request->sports_id;
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
        return redirect()->route('coaches.index')->with('warning','The coach has been updated successfully.');
    }
    public function destroy( Coach $coach)
    {
        $coach->delete();
        return redirect()->route('coaches.index');
    }


}
