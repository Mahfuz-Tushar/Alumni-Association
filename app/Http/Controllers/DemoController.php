<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DemoController extends Controller
{
    function index(){
        return view ("index");
    }
    function about(){
        return view ("about");
    }
    function contact(){
        return view ("contact");
    }
    function cons(){
        return view ("cons");
    }
    function search(){
        return view ("search");
    }
    function demo(Request $request)
    {
        $name=$request->name;
        $category=$rrequest->email;
        $data=DB::table('user')->where('name',$name)->where('email',$category)->get();
        return view('table',compact('data'));
    }
    function oneselect(){

        $tushar=DB::table('users')->where('name')->where('email',$category)->get();
        return view ("table");
    }
}
