<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ABCController extends Controller
{
    //
    function viewA(){
        return view('url.pagea');
    }
    function viewB(){
        return view('url.pageb');
    }

    function viewC(){
        return view('url.pagec');
    }
    function viewCParam($name){
        return view('url.pagec',["name"=>$name]);
    }
}
