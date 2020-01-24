<?php

namespace App\Http\Controllers;
use App\Inquiry;
use Illuminate\Http\Request;

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
       return view('inquiry.index',compact('inquiries'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inquiry.create');
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
        $inquiry->type =$request ->type;
        $inquiry->description =$request ->description;
        $inquiry->staff_id =$request ->staff_id;
        $inquiry->student_id =$request ->student_id;
        $inquiry->date_time =$request ->date_time;
        $inquiry->save();
        return redirect('/inquiry');
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
        $inquiry= Inquiry ::find ($id);
        return view('inquiry.edit',compact('inquiry'));
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
        $inquiry->type =$request ->type;
        $inquiry->description =$request ->description;
        $inquiry->staff_id =$request ->staff_id;
        $inquiry->student_id =$request ->student_id;
        $inquiry->date_time =$request ->date_time;
        $inquiry->update();
        return redirect('/inquiry');
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

        return redirect('/inquiry');
        //
    }
}
