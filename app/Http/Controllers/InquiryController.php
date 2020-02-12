<?php

namespace App\Http\Controllers;
use App\Course;
use App\Inquiry;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\FollowUp;
use Auth;
use DB;
use App\Assign;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inquiries = Inquiry::All();
        $followups = FollowUp::All();
        $followup = DB::table('follow_ups')
         ->max('follow_up');
        $users = User::All();

        $assigns = Assign::All();
        if(session('success_message')){
            Alert::success('Success!',session('success_message'));
           }
       return view('inquiry.index',compact('inquiries','followups','assigns','users'));
       
    }

    public function myinquiry()
    {
        $followups = FollowUp::All();
        $users = User::All();

        $assigns = Assign::All();
        
        $inquiries = DB::table('inquiries')
           ->where('inquiry_by',Auth::user()->name)
           ->get();
     
       return view('inquiry.index',compact('inquiries','followups','assigns','users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::All();
        $staffs = User::All();
        return view('inquiry.create',compact('courses', 'staffs'));
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
        $inquiry = new  Inquiry;
        $inquiry->id =$request ->id;
        $inquiry->source =$request ->source;
        $inquiry->description =$request ->description;
        $inquiry->name =$request ->name;
        $inquiry->course_name =$request ->course_name;
     
        $inquiry->status =$request ->status;
        $inquiry->phone_number =$request ->phone_number;
        $inquiry->title =$request ->title;
        $inquiry->inquiry_by =$request ->inquiry_by;
        $inquiry->email =$request ->email;

        $inquiry->follow_up =$request ->follow_up;
        date_default_timezone_set("Asia/Colombo");
        $inquiry->date_time =date('Y-m-d h:i:s');
        $inquiry->save();
        $LastInsertId = $inquiry->id;

        $follow = new  FollowUp;
        $follow->id =$request ->id;
        $follow->inquiry_by =$request ->inquiry_by;
        $follow->follow_up =$request ->follow_up;
        $follow->inquiry_id =$LastInsertId;
        $follow->description =$request ->description;
        date_default_timezone_set("Asia/Colombo");
        $follow->date_time =date('Y-m-d h:i:s');
        $follow->save();
        return redirect('/inquiry')->withSuccessMessage('Successfuly Added');
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
        $inquiry= Inquiry ::find ($id);

        return view('inquiry.show',compact('inquiry'));
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
        $courses = Course::All();
        $inquiry= Inquiry ::find ($id);
        $staffs = User::All();
        return view('inquiry.edit',compact('inquiry','courses', 'staffs'));
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
        $inquiry =Inquiry::find ($id);;
       
        $inquiry->source =$request ->source;
        $inquiry->description =$request ->description;
        $inquiry->name =$request ->name;
        $inquiry->course_name =$request ->course_name;

       
        $inquiry->status =$request ->status;
        $inquiry->phone_number =$request ->phone_number;
        $inquiry->title =$request ->title;
        $inquiry->inquiry_by =$request ->inquiry_by;
        $inquiry->email =$request ->email;

        $inquiry->follow_up =$request ->follow_up;
       
        $inquiry->update();
        return redirect('/inquiry')->withSuccessMessage('Successfuly Updated')
        ;
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
        $inquiry =  Inquiry::find($id);
        $inquiry->delete();

        return redirect('/inquiry')->withSuccessMessage('Successfuly Deleted')
        ;
        //
    }
}
