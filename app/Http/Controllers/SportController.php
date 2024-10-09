<?php

namespace App\Http\Controllers;

use App\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sports=Sport::all();
        return view('AdminTemp/sports/index',compact('sports'));
    }


    public function create()
    {

         return view('AdminTemp/sports/create');
    }




    public function store(Request $request)
    {
        $request->validate(['name'=>'required','hour'=>'required','cost'=>'required|numeric|min:99']
        ,['name.required'=>'The name is required.','hour.required'=>'The number of hours is required.',
        'cost.required'=>'The cost is required.','cost.min'=>'The cost should be at least 100 Dt.']
    );
        Sport::create($request->all());
        return redirect()->route('sports.index')->with('success','The sport has been added successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit(Sport $sport)
    {

        return view('AdminTemp/sports/edit',compact('sport'));
    }

    public function update(Request $request, Sport $sport)
    {
        $request->validate(['name'=>'required','hour'=>'required','cost'=>'required|numeric|min:100']
        ,['name.required'=>'The name is required.','hour.required'=>'The number of hours is required.',
        'cost.required'=>'The cost is required.','cost.min'=>'The cost should be at least 100 Dt.']
    );
        $sport->update($request->all());
        return redirect()->route('sports.index')->with('warning','The sport has been updated successfully.');
    }
    public function destroy(Sport $sport)
    {
        $sport->delete();
        return redirect()->route('sports.index');
    }
}
