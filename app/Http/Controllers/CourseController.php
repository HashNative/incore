<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
<<<<<<< HEAD
=======
        $course = new Course;
        $course->id =$request ->id;
        $course->course_name =$request ->course_name;
        $course->registration_date =$request ->registration_date;
        $course->course_fees =$request ->course_fees;
        $course->description =$request ->description;
        $course->start_by =$request ->start_by;
        $course->end_by =$request ->end_by;
        $course->save();
        return redirect('/course');
>>>>>>> b5b36d73b4b98d11261378f34a3f5d6c9099e6a9
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
<<<<<<< HEAD
=======
        $course = Course ::find ($id);;
        $course->course_name =$request ->course_name;
        $course->registration_date =$request ->registration_date;
        $course->course_fees =$request ->course_fees;
        $course->description =$request ->description;
        $course->end_by =$request ->end_by;
        $course->start_by =$request ->start_by;
        $course->update();
        return redirect('/course');
>>>>>>> b5b36d73b4b98d11261378f34a3f5d6c9099e6a9
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
