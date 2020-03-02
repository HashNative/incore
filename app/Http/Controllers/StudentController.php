<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\User;
use App\Inquiry;
use Auth;
use DB;

use RealRashid\SweetAlert\Facades\Alert;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         $students = DB::table('inquiries')
        ->select('*')
        ->where('status','Registered')
        ->get();

       if(session('success_message')){
        alert('Done !');
    }
       return view('student.index',compact('students'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
        $courses= Course::All();
        $student= student::All();
        $staffs= User::All();
        return view('student.create',compact('student','courses','staffs'))
        ;
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
        $student = new  Inquiry;
        $student->id =$request ->id;
        $student->name =$request ->student_name;
        
        date_default_timezone_set("Asia/Colombo");
        $student->date_time =date('Y-m-d h:i:s');
        $student->email =$request ->email_id;
        $student->phone_number =$request ->phone_number;
        $student->course_name =$request ->course_name;
        $student->transfer =$request ->transfer;
        $student->batch_name =$request ->batch_name;

        $student->gender =$request ->gender;

        $student->nic =$request ->nic;

        $student->inquiry_source =$request ->inquiry_source;
        $student->source =$request ->source;
        $student->inquiry_by =Auth::user()->name;
        $student->description ='';
        $student->status ='Registered';
        $student->title ='Mr';
        $student->follow_up =1;
        $student->student_id =1;
        date_default_timezone_set("Asia/Colombo");
        $student->registration_date =date('Y-m-d');
                                                         
        $student->save();
        return redirect('/student');

        
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
        $student= Student ::find ($id);
        return view('student.show',compact('student'));
        
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
        $staffs = User::All();

        $student= Inquiry ::find ($id);
        return view('student.edit',compact('student','courses','staffs'));
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
       
        $student= Inquiry ::find ($id);
        
        $student->name =$request ->student_name;
      
        $student->email =$request ->email_id;
        $student->batch_name =$request ->batch_name;

        $student->gender =$request ->gender;

        $student->nic =$request ->nic;

      
        $student->phone_number =$request ->phone_number;
        $student->course_name =$request ->course_name;
        $student->transfer =$request ->transfer;
        $student->inquiry_source =$request ->inquiry_source;
        $student->source =$request ->source;
        $student->status =$request ->status;
        $student->inquiry_by =$request ->inquiry_by; //Auth::user
        
        $student->update();
        return redirect('/student')->withSuccessMessage('Successfuly Updated');
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
        $student =  Inquiry::find($id);
       
        $student->delete() ;
       

        return redirect('/student')->withSuccessMessage('Successfuly Deleted');
        //
      
 }
}

