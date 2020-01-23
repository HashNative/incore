<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
       $students = Student::All();
       return view('home',compact('students'));
        //
    }
    //
}
