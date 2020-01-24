<?php

namespace App\Http\Controllers;
use FollowUp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $follows = FollowUp::All();
        return view('inquiry.index',compact('follows'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $follow = new  Staff;
        $follow->id =$request ->id;
        $follow->inquiry_id =$request ->inquiry_id;
        $follow->inquiry_by =$request ->inquiry_by;
        $follow->follow_up =$request ->follow_up;
        
        $follow->description =$request ->description;
        $follow->status  =$request ->status;
        $follow->date_time  =$request ->date_time;

        $follow->save();
        return redirect('/inquiry');

        //
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
    public function update(Request $request, $id)
    {
        $staff= Staff ::find ($id);
        
        $follow->inquiry_id =$request ->inquiry_id;
        $follow->inquiry_by =$request ->inquiry_by;
        $follow->follow_up =$request ->follow_up;
        
        $follow->description =$request ->description;
        $follow->status  =$request ->status;
        $follow->date_time  =$request ->date_time;
        $staff->update();
        return redirect('/inquiry');
        //
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