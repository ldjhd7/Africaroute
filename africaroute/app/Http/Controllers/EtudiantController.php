<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   Public function index () {

    $test=5;
        return view('nouveau',compact("test"));
    }
}
