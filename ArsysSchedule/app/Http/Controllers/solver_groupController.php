<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class solver_groupController extends Controller
{
    public function index(){
        $solver_group   = Solver_group::all();
        return view('solver_group')->with('solver_group', $solver_group);
    }
}
