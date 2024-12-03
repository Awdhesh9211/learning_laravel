<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    //
    function index(){
        return view("storage.upload");
    }

    function upload(Request $req){
        $img=$req->file('file')->store('public');
        $arr=explode("/",$img);
        $path=$arr[1];
        Image::insert([
          "path"=>$path
        ]);
        return redirect('/list');    
    }
    
    function list(){
        $res=Image::all();
        return view('storage.list',['images'=>$res]);
    }
}
