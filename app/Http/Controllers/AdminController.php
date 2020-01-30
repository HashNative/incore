<?php

namespace App\Http\Controllers;
use App\Student;
use App\Inquiry;
use App\Staff;
use App\Course;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::All();
        //$inquiries = Inquiry::All();
        $staffs = Staff::All();
        $courses = Course::All();
        $inquiries = DB::table('inquiries')
            ->select(array('inquiry_by',DB::raw('COUNT(inquiry_by) AS count')))
            ->groupBy('inquiry_by')
            ->get();
           
            
          
        

        $inq = $inquiries->pluck('inquiry_by')->all();
        $count = Inquiry::whereIn('inquiry_by', $inq)->count();

        $stu = $students->pluck('student_name')->all();
        $count1 = Student::whereIn('student_name', $stu)->count();

        $stf = $staffs->pluck('staff_name')->all();
        $count2 = Staff::whereIn('staff_name', $stf)->count();

        $cou = $courses->pluck('course_name')->all();
        $count3 = Course::whereIn('course_name', $cou)->count();
            
        return view('dashboard.index',compact('students','inquiries','staffs','count','courses','count1','count2','count3'));
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
