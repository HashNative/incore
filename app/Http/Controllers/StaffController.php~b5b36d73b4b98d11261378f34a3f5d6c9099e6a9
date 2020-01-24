<?php

namespace App\Http\Controllers;
use App\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $staffs = Staff::All();
       return view('staff.index',compact('staffs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('staff.create');
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
        $staff = new  Staff;
        $staff->id =$staff ->id;
        $staff->staff_name =$request ->staff_name;
        $staff->languages =$request ->languages;
        $staff->mobile_number =$request ->mobile_number;
        $staff->password =$request ->password;
        $staff->email =$request ->email;

        $staff->save();
        return redirect('/staff');
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
        $staff= Staff ::find ($id);
        return view('staff.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
      */
    public function edit($id)
    {
        $staff= Staff ::find ($id);
        return view('staff.edit',compact('staff'));
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
        $staff= Staff ::find ($id);
        
        $staff->staff_name =$request->staff_name;
        $staff->languages =$request->languages;
        $staff->password =$request ->password;
        $staff->email =$request ->email;
        $staff->mobile_number =$request->mobile_number;
        $staff->update();
        return redirect('/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff =  Staff::find($id);
        $staff->delete();

        return redirect('/staff');
    }
}
