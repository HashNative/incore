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

        $inquiries = DB::table('inquiries')
        ->select('*')
        ->where('status', '!=','Registered')
        ->get();

        $followups = FollowUp::All();
       
         $followups1 = DB::table('follow_ups')
        ->select(array('follow_up','inquiry_id',DB::raw('MAX(follow_up) AS count')))
        ->groupBy('follow_up','inquiry_id')
        ->get();
        $users = User::All();
        $ids = DB::table('inquiries')
        ->select(array('follow_up'))
        ->groupBy('follow_up')
        ->get();

        $assigns = Assign::All();
        if(session('success_message')){
            alert('Done !');
        }
       return view('inquiry.index',compact('ids','inquiries','followups1','followups','assigns','users'));
       
    }

    public function myinquiry()
    {
        $followups = FollowUp::All();
        $users = User::All();

        $assigns = Assign::All();
        $ids = DB::table('inquiries')
        ->select(array('follow_up'))
        ->groupBy('follow_up')
        ->get();
        $inquiries = DB::table('inquiries')
           ->where('inquiry_by',Auth::user()->name)
           ->get();
           $followups1 = DB::table('follow_ups')
           ->select(array('follow_up','inquiry_id',DB::raw('MAX(follow_up) AS count')))
           ->groupBy('follow_up','inquiry_id')
           ->get();
       return view('inquiry.index',compact('ids','inquiries','followups','followups1','assigns','users'));
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
     
        date_default_timezone_set("Asia/Colombo");
        $inquiry->date_time =date('Y-m-d h:i:s');

        $inquiry->status =$request ->status;
        $inquiry->phone_number =$request ->phone_number;
        $inquiry->title =$request ->title;
        $inquiry->inquiry_by =Auth::user()->name;
        $inquiry->email =$request ->email;
        $inquiry->student_id ='';
        $inquiry->inquiry_source =$request ->source;
        $inquiry->transfer ='Yes';
        $inquiry->registration_date =date('Y-m-d');

        $inquiry->follow_up =1;
        
        $inquiry->save();
        $LastInsertId = $inquiry->id;

        $follow = new  FollowUp;
        $follow->id =$request ->id;
        $follow->inquiry_by =Auth::user()->name;
        $follow->follow_up =1;
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
        $followups = FollowUp::All();
        $users = User::All();

        $assigns = Assign::All();
        $ids = DB::table('inquiries')
        ->select(array('follow_up'))
        ->where('inquiry_by',Auth::user()->name)
        ->where('status','!=','Registered')
        ->groupBy('follow_up')
        ->get();
        $inquiries = DB::table('inquiries')
           ->where('inquiry_by',Auth::user()->name)
           ->where('status','!=','Registered')
           ->get();
           $followups1 = DB::table('follow_ups')
           ->select(array('follow_up','inquiry_id',DB::raw('MAX(follow_up) AS count')))
           ->groupBy('follow_up','inquiry_id')
           ->get();
       return view('inquiry.index',compact('ids','inquiries','followups','followups1','assigns','users'));
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
    
 public function update($id,Request $request)
 {
     $inquiry =Inquiry::find ($id);
   
     $inquiry->source =$request ->source;
     $inquiry->description =$request ->description;
     $inquiry->name =$request ->name;
     $inquiry->course_name =$request ->course_name;

    
     $inquiry->status =$request ->status;
     $inquiry->phone_number =$request ->phone_number;
     $inquiry->title =$request ->title;
     $inquiry->inquiry_by =$request ->inquiry_by;
     $inquiry->email =$request ->email;
   
     $inquiry->update();
     return redirect('/inquiry')->withSuccessMessage('Successfuly Updated');
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
