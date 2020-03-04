<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use App\Course;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::All();
        $courses = Course::All();
        if(session('success_message')){
            alert('Done !');
        }
        return view('batch.index',compact('batches','courses'));
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
        return view('batch.create',compact('courses'));
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
        $batch = new Batch;
        $batch->id =$request ->id;
        $batch->course_name =$request ->course_name;
        $batch->batch_name =$request ->batch_name;
        $batch->registration_date =$request ->registration_date;
        $batch->start_by =$request ->start_by;
        $batch->end_by =$request ->end_by;
        $batch->save();
        return redirect('/batch')->withSuccessMessage('Successfuly Added');
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
        $batch= Batch ::find ($id);
        return view('batch.show',compact('batch'));
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
        $batch= Batch ::find ($id);
        return view('batch.edit',compact('batch','courses'));
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
        $batch = Batch ::find ($id);;
        $batch->course_name =$request ->course_name;
        $batch->batch_name =$request ->batch_name;
        $batch->registration_date =$request ->registration_date;
        $batch->end_by =$request ->end_by;
        $batch->start_by =$request ->start_by;
        $batch->update();
        return redirect('/batch')->withSuccessMessage('Successfuly Updated')
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
        $batch =  Batch::find($id);
        $batch->delete();

        return redirect('/batch')->withSuccessMessage('Successfuly Deleted');
         //
    }
}
