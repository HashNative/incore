<?php

namespace App\Http\Controllers;
use App\FollowUp;
use App\Inquiry;
use DB;
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
       
        $follow = new  FollowUp;
        $follow->id =$request ->id;
        $follow->inquiry_by =$request ->inquiry_by;
        $follow->follow_up =$request ->follow_up;
        $follow->inquiry_id =$request ->inquiry_id;
        $follow->description =$request ->description;
        date_default_timezone_set("Asia/Colombo");
        $follow->date_time =date('Y-m-d h:i:s');
        $follow->save();


        $inquiry =Inquiry::find ($request ->inquiry_id);
       
        $inquiry->follow_up =$request->follow_up;
       
        $inquiry->update();


        return redirect('/inquiry');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $follow= FollowUp ::find ($id);

        return view('inquiry.index',compact('follow'));
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
        $follow= FollowUp ::find ($id);
        $follow->description =$request ->description;
        $follow->update();
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
        $inquiry =  FollowUp::find($id);
        

        $inquiry_id = FollowUp::find($id)->inquiry_id;
        $follow = Inquiry::find($inquiry_id)->follow_up;
        $inquiry->delete();
       
       
        $follow1= Inquiry ::find ($inquiry_id);
        $follow1->follow_up =$follow-1;
        $follow1->update();
        return redirect('/inquiry')->withSuccessMessage('Successfuly Deleted')
        ;
    }
}