<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Member;
use App\Modalmember;
use App\Coach;
use App\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
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
        $subscriptions=Subscription::all();
        $sports=Sport::all();
        $members=Member::all();
        $coaches=Coach::all();
        $date=date('Y-m-d');
        $modals=Modalmember::where('end','<',$date)->update(['status'=>0]);
        $modals=Modalmember::all();

        foreach($modals as $modal)
        {
            if ($modal->status==0)
            {
                DB::table('ends')->insert([
                    [
                    'id' =>$modal->id,
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
            }

        }

        return view('AdminTemp/subscriptions/index',compact('subscriptions','modals','members','coaches','sports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Modalmember $modals)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modalmember $modal)
    {


    }
}
