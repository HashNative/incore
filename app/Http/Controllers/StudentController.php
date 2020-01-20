<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

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
        $student->status =$request ->status;
        $student->email_id =$request ->email_id;
        $student->address =$request ->address;
        $student->phone_number =$request ->phone_number;
        $student->course_id =$request ->course_id;
        
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
        $student= Student ::find ($id);
        return view('student.edit',compact('student'));
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
        $student->id =$request ->id;
        $student->student_name =$request ->student_name;
        $student->status =$request ->status;
        $student->email_id =$request ->email_id;
        $student->address =$request ->address;
        $student->phone_number =$request ->phone_number;
        $student->course_id =$request ->course_id;
        $student->update();
        return redirect('/student');
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
        $student->delete();

        return redirect('/student');
        //
    }
}

