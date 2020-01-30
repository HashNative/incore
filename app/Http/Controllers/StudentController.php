<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Staff;

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
         $students = Student::All();
if(session('success_message')){
         Alert::success('Success!',session('success_message'));
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
        return view('student.create');
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
        $student = new  Student;
        $student->id =$request ->id;
        $student->student_name =$request ->student_name;
        $student->date =$request ->date;
        $student->email_id =$request ->email_id;
        $student->date =$request ->date;
        $student->phone_number =$request ->phone_number;
        $student->course_name =$request ->course_name;
        $student->transfer =$request ->transfer;
        $student->inquiry_source =$request ->inquiry_source;
        $student->source =$request ->source;
        $student->inquiry_by =$request ->inquiry_by;
        $student->register_by =$request ->register_by;
                                                                  
        
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
        $staffs = Staff::All();

        $student= Student ::find ($id);
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
       
        $student= Student ::find ($id);
        
        $student->student_name =$request ->student_name;
      
        $student->email_id =$request ->email_id;
      
        $student->phone_number =$request ->phone_number;
        $student->course_name =$request ->course_name;
        $student->transfer =$request ->transfer;
        $student->inquiry_source =$request ->inquiry_source;
        $student->source =$request ->source;
        $student->date =$request ->date;
        $student->inquiry_by =$request ->inquiry_by;
        $student->register_by =$request ->register_by;
        $student->date =$request ->date;
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
        $student =  Student::find($id);
       
        $student->delete() ;
       

        return redirect('/student')->withSuccessMessage('Successfuly Deleted');
        //
      
    }
}

