<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function index(Request $req){
        $user=$req->session()->pull('user');
        if($user){
            return redirect('/profile');
        }
        return view("session.login");
    }
    function login(Request $req){
         $req->session()->put('user',$req->user);
         
         return redirect("/profile");
    }
    function profile(Request $req){
        $user=$req->session()->pull('user');
        if($user){
            return view('session.profile',['user'=>$user]);
        }else{
            return "You Cant Access This Page ....";
        }
    }
    function logout(Request $req){
        $req->session()->remove('user');
          return  redirect('/loginpage');
    }
}
