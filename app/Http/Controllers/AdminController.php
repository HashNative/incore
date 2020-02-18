<?php

namespace App\Http\Controllers;
use App\Inquiry;
use App\Student;
use App\User;
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
        $staffs = User::All();
        
        $inquiries = DB::table('inquiries')
            ->select(array('inquiry_by',DB::raw('COUNT(inquiry_by) AS count')))
            ->groupBy('inquiry_by')
            ->orderBy('inquiry_by', 'asc')
            ->get();
        $sources = DB::table('inquiries')
        ->select(array('source','inquiry_by',DB::raw('COUNT(source) AS counta')))
        ->groupBy('source','inquiry_by')
        ->orderBy('source', 'asc')
        ->get();
        $courses = DB::table('inquiries')
            ->select(array('course_name',DB::raw('COUNT(course_name) AS count')))
            ->groupBy('course_name')
            ->get();
        $courses1 = DB::table('inquiries')
            ->select(array('status','course_name',DB::raw('COUNT(status) AS countx')))
            ->where('status','registered')
            ->groupBy('status','course_name')
            ->get();
           
        $sources1 = DB::table('inquiries')
        ->select(array('source','inquiry_by',DB::raw('COUNT(source) AS countb')))
        ->where('status','Registered')
        ->groupBy('source','inquiry_by')
        ->orderBy('source', 'asc')
        ->get();
        $inquiries1 = DB::table('inquiries')
        ->select(array('inquiry_by',DB::raw('COUNT(inquiry_by) AS countc')))
        ->where('status','Registered')
        ->groupBy('inquiry_by')
        ->orderBy('inquiry_by', 'asc')
        ->get();
            
            
          
        

        $inq = $inquiries->pluck('inquiry_by')->all();
        $count = Inquiry::whereIn('inquiry_by', $inq)->count();

        $stu = $students->pluck('student_name')->all();
        $count1 = Student::whereIn('student_name', $stu)->count();

        $stf = $staffs->pluck('name')->all();
        $count2 = User::whereIn('name', $stf)->count();

        $cou = $courses->pluck('course_name')->all();
        $count3 = Course::whereIn('course_name', $cou)->count();
        return view('dashboard.index',compact('courses1','students','inquiries','inquiries1','staffs','count','courses','count1','count2','count3','sources','sources1'));
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
