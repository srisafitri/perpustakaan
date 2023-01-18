<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Operator;

class OperatorController extends Controller
{
    public function index ()

{
    $operators=Operator::all();
    return view('operator.index',compact('operators'));
}

public function create()
{
    return view('operator.create');
}
    //
}
