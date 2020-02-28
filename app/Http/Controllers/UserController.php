<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'languages' => 'required|String',
            'mobile_number'=>'required'
        ]);
    }


    public function index()
    {
       $staffs = User::All();
       if(session('success_message')){
        alert('Done !');
       }
       $inquiries = DB::table('inquiries')
            ->select(array('inquiry_by',DB::raw('COUNT(inquiry_by) AS count')))
            ->groupBy('inquiry_by')
            ->orderBy('inquiry_by', 'asc')
            ->get();
       return view('staff.index',compact('staffs', 'inquiries'));
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

       
        $staff = new  User;
       
        $staff->name =$request->name;
        $staff->languages =$request->languages;
       
        $staff->email =$request ->email;
        $staff->mobile_number =$request->mobile_number;
        
        $staff->password = bcrypt($request->password);
        
        $staff->save();
        return redirect('/staff')
        ->withSuccessMessage('Successfuly added');


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
        $staff= User ::find ($id);
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
        $staff= User ::find ($id);
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
        $staff= User ::find ($id);
        
        $staff->name =$request->name;
        $staff->languages =implode(',',$request->languages);
       
        $staff->email =$request ->email;
        $staff->mobile_number =$request->mobile_number;
     
        $staff->update();
        return redirect('/staff') ->withSuccessMessage('Successfuly Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff =  User::find($id);
        $staff->delete();

        return redirect('/staff') ->withSuccessMessage('Successfuly Deleted');
    }
}
