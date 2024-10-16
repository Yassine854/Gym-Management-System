<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class UserController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminTemp/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required','email' => 'required|unique:users|unique:coaches|unique:members','password'=>'required']);
        // User::create($request->all());

        $pass = Hash::make($request->input('password'));
        DB::table('users')->insert([
            [
            'name' =>$request->input('name'),
            'email' => $request->input('email'),
            'password' => $pass
            ]

        ]);
        return redirect()->route('users.create')->with('success','Admin '.'"'.strtoupper($request->input('name')).'" '.'has been added successfully.');
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
    public function edit(User $user)
    {
        return view('AdminTemp/users/edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $user->update($request->all());
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $request->validate(['name'=>'required','email'=>'required',Rule::unique('users')->ignore($this->user->id ?? 0),'password'=>'required']);
        $user->update();
        return redirect()->route('users.edit',$user->id)->with('warning','The user has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
