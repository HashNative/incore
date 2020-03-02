<?php

namespace App\Http\Controllers;
use App\Course;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::All();
        if(session('success_message')){
            alert('Done !');
        }

        return view('course.index',compact('courses'));
          //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $courses = Course::All();
        return view('course.create',compact('courses'));
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
        $course = new Course;
        $course->id =$request ->id;
        $course->course_name =$request ->course_name;
        $course->course_fees =$request ->course_fees;
        $course->description =$request ->description;
        $course->save();
        return redirect('/course')->withSuccessMessage('Successfuly Added');
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
        $course= Course ::find ($id);
        return view('course.show',compact('course'));
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
        $course= Course ::find ($id);
        return view('course.edit',compact('course'));
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
        $course = Course ::find ($id);;
        $course->course_name =$request ->course_name;
        $course->course_fees =$request ->course_fees;
        $course->description =$request ->description;
        $course->update();
        return redirect('/course')->withSuccessMessage('Successfuly Updated')
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
        $course =  Course::find($id);
        $course->delete();

        return redirect('/course')->withSuccessMessage('Successfuly Deleted');
         //
    }
}