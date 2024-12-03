<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getHome(){
        if(View::exists("home")){
            return view("home");
        }
        return "Page Not Found";
    }

    function getName($name){
        return view("userinfo",["name"=>$name]);
    }

    function loginForm(){
        return view("auth-form");
    }

    function login(Request $req){
        // return redirect("/");
        $req->validate([
            'username'=>"required | min:3",
            "email"=>"required | email",
            "password"=>"required | min:6",
        ],[
            "username.required"=>"Username is Required",
            "username.min"=>"Username must be a greater than 3",
            "email.required"=>"Email is Required",
            "email.email"=>"Fill Valid Email",
            "password.required"=>"Password is Mendatory",
            "password.min"=>"Password should 6 or greater than charachter"
        ]);
        return view("userinfo",["username"=>$req->username,"email"=>$req->email,"password"=>$req->password]);
    }















    function home(Request $req){
        $lang=$req->session()->pull('lang');
        if($lang){
           App::setLocale($lang);
        }else{
           App::setLocale('en');
        }
        
        return view('local.home');
   }
   function changeLang(Request $req,$lang){
    $req->session()->put('lang',$lang);
    return redirect("/home");
}
}
