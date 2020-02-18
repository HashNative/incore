<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assign;
use DB;
use Auth;
use App\FollowUp;
use App\User;
class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $assigns = DB::table('assigns')
            ->select('*')
            ->where('assign_to',Auth::user()->name)
            ->get();
        return view('assign.index',compact('assigns'));
       
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
        $assign = new  Assign;
        $assign->id =$request ->id;
       
        $assign->inquiry_by =$request ->inquiry_by;
       
        $assign->inquiry_id =$request ->inquiry_id;
        $assign->assign_to =$request ->assignto;
        
        $assign->schedule_date =$request ->date;
        $assign->language =$request ->language;
        $assign->save();
        return redirect('/assign');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $followups = FollowUp::All();
        $users = User::All();

        $assigns = Assign::All();
        
        $inquiries = DB::table('inquiries')
           ->where('id',$id)
           ->get();
           $followups1 = DB::table('follow_ups')
           ->select(array('follow_up','inquiry_id',DB::raw('MAX(follow_up) AS count')))
           ->groupBy('follow_up','inquiry_id')
           ->get();
       return view('inquiry.index',compact('inquiries','followups','followups1','assigns','users'));
        //
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
        $assign =  Assign::find($id);
        $assign->id =$request ->id;
       
        $assign->inquiry_by =$request ->inquiry_by;
       
        $assign->inquiry_id =$request ->inquiry_id;
        $assign->assign_to =$request ->assignto;
        
        $assign->schedule_date =$request ->date;
        $assign->language =$request ->language;
        $assign->update();
        return redirect('/assign');
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
        $assign =  Assign::find($id);
        $assign->delete();

        return redirect('/assign')->withSuccessMessage('Successfuly Deleted');
        //
    }
}
