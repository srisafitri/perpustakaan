<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index ()
{
    $student=Student::all();
    return view('students.index',compact('student'));
}

public function create ()
{
    return view('students.create');
}
    //
}
