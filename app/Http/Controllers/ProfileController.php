<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Inquiry;
use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->select('*')
        ->where('name',Auth::user()->name)
        ->get();

        $users1 = DB::table('inquiries')
        ->select(array('inquiry_by',DB::raw('COUNT(inquiry_by) AS count')))
        ->where('inquiry_by',Auth::user()->name)
        ->groupBy('inquiry_by')
        ->get();

        $users2 = DB::table('inquiries')
        ->select(array('inquiry_by',DB::raw('COUNT(inquiry_by) AS count')))
        ->where('inquiry_by',Auth::user()->name)
        ->where('status','Registered')
        ->groupBy('inquiry_by')
        ->get();

   return view('profile.index',compact('users','users1','users2'));
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
       $staff= User ::find ($id);
        
        $staff->name =$request->name;
        $staff->languages =implode(',',$request->languages);
       
        $staff->email =$request ->email;
        $staff->mobile_number =$request->mobile_number;
        $staff->password =bcrypt($request->password);
        $staff->update();
        return redirect('/profile');
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
