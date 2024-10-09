<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Sport;
use App\Coach;
use App\Modalmember;
use phpDocumentor\Reflection\Types\Nullable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class MemberController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sports = Sport::all();
        $coaches = Coach::all();
        $modals = Modalmember::all();
        $members = Member::all();
        return view('AdminTemp/members/index', compact('members', 'modals', 'sports', 'coaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('AdminTemp/members/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'fname' => 'required', 'lname' => 'required', 'gender' => 'required', 'birth' => 'required', 'address' => 'required',
                'tel' => 'required|min:8|max:8|unique:members', 'password' => 'required|min:8', 'email' => 'required|unique:members|unique:coaches|unique:users'
            ],
            [
                'address.required' => 'The address is required.', 'fname.required' => 'The first name is required.', 'lname.required' => 'The last name is required.', 'birth.required' => 'The birthday is required.', 'tel.required' => 'The phone number is required.', 'email.required' => 'The email is required.', 'password.min' => 'The password must be at least 8 characters.', 'tel.min' => 'The phone Number must be composed of 8 numbers', 'tel.max' => 'The phone Number must be composed of 8 numbers.', 'tel.unique' => 'This phone Number is already in use.'
            ]
        );
        $member = new Member();
        $member->fname = $request->fname;
        $member->lname = $request->lname;
        $member->gender = $request->gender;
        $member->birth = $request->birth;
        $member->address = $request->address;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->password = bcrypt($request->password);

        $member->save();


        return redirect()->route('members.index')->with('success', 'The member has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('AdminTemp/members/edit', compact(['member']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate(
            [
                'fname' => 'required', 'lname' => 'required', 'gender' => 'required', 'birth' => 'required', 'address' => 'required',
                'tel' => 'min:8|max:8|unique:coaches', 'password' => 'required|min:8',  'email' => [
                    'required', 'unique:coaches', 'unique:users',
                    Rule::unique('members')->ignore($member->id),
                ], 'tel' => [
                    'required',
                    Rule::unique('members')->ignore($member->id),
                ]
            ],

            [
                'address.required' => 'The address is required.', 'fname.required' => 'The first name is required.', 'lname.required' => 'The last name is required.', 'birth.required' => 'The birthday is required.', 'tel.required' => 'The phone number is required.', 'password.required' => 'The password is required.', 'email.required' => 'The email is required.', 'password.min' => 'The password must be at least 8 characters.', 'tel.min' => 'The phone Number must be composed of 8 numbers', 'tel.max' => 'The phone Number must be composed of 8 numbers.', 'tel.unique' => 'This phone Number is already in use.'
            ]
        );


        $member->fname = $request->fname;
        $member->lname = $request->lname;
        $member->gender = $request->gender;
        $member->birth = $request->birth;
        $member->address = $request->address;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->password = bcrypt($request->password);

        $member->update();
        return redirect()->route('members.index')->with('warning', 'The member has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index');
    }
}
