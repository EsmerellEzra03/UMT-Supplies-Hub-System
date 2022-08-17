<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    //Logic untuk buka page index
    public function index()
    {
        return view('condition.index');
    }

    public function create()
    {
        return view('condition.create');
    }
}
