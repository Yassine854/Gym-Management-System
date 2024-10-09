<?php

namespace App\Http\Controllers;
use App\Modalmember;
use App\Member;
use App\Coach;
use App\Sport;
use App\End;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ModalmemberController extends Controller
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
        $sports=Sport::all();
        $members=Member::all();
        $coaches=Coach::all();
        // $modals=Modalmember::all();
        $date=date('Y-m-d');
        dd($date);
        $modals=Modalmember::all();

         return view('AdminTemp/members/subscriptions/index',compact('modals','members','coaches','sports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports=Sport::all();
        $members=Member::all();
        $coaches=Coach::all();
        $modals=Modalmember::all();

        return view('AdminTemp/members/modalmembers/create',compact('modals','members','coaches','sports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['sub'=>'required','sports_id'=>'required',
        'pay'=>'required','start'=>'required','image'=>'required','members_id'=>['required',Rule::unique('modalmembers')->where('sports_id', request('sports_id'))]]

    );


        // Modalmember::create($request->all());
        $modal=new Modalmember();
        $modal->sports_id=$request->sports_id;
        $modal->coaches_id=$request->coaches_id;
        $modal->pay=$request->pay;
        $modal->sub=$request->sub;
        $modal->start=$request->start;
        $modal->members_id=$request->members_id;
        $modal->end=date("Y-m-d ", strtotime($modal->start.'+'.($modal->sub*30).'days'));

        // $input=$request->all();
        $modal->image=$request->image;
        if($request->hasFile('image'))
        {
           $destinationPath = 'images/clients/' ;
           $file = $request->file('image') ;
           $fileName = $file->getClientOriginalName() ;
           $file->move($destinationPath,$fileName);
           $path=$request->file('image')->storeAs($destinationPath,$fileName);
           $input['image']=$fileName;

        }
        $modal->save();
        return redirect()->route('subscriptions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modalmember $modal)
    {

          $modal->update($request->all());
        return redirect()->route('modals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $modal=Modalmember::find($id);
        DB::table('ends')->insert([
            [
            'id' =>$request->input('id'),
            'sports_id' => $modal->sports_id,
            'members_id' => $modal->members_id,
            'coaches_id' => $modal->coaches_id,
            'start' => $modal->start,
            'end' => $modal->end,
            'pay' => $modal->pay,
            'image' => $modal->image,
            ]

        ]);
        $modal->delete();
         return redirect()->route('subscriptions.index')->with('danger','"'.strtoupper($modal->members->fname).' '.strtoupper($modal->members->lname).'"'. ' is now removed.');// ->with('danger','"'.strtoupper($modal->members->fname).' '.strtoupper($modal->members->lname).'"'. ' is now unsubscribed from '.'"'.strtoupper($modal->sports->name).'" .');
    }

    public function end(){
        $sports=Sport::all();
        $members=Member::all();
        $coaches=Coach::all();
        $modals=Modalmember::all();
         return view('AdminTemp/subscriptions/end',compact('modals','members','coaches','sports'));
    }
}
