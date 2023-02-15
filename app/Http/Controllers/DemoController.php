<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

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
    function ourMission(){
        return view ("ourMission");
    }
    function search(Request $request){
        //dd($request ->all());
        $name= $request->name;
        $department=$request->department;
        $search = User::when($name, function ($query, $name) {
            return $query->where('name', 'like', "%{$name}%");
                  })->when($request->department, function ($query, $department) {
                      return $query->where('department', 'like', "%{$department}%");
                  }, function ($query) {
                      return $query->orderByDesc('id');
                  })->get();
        //dd($search);
        return view ('searchresult',compact('search'));
    }
    function demo(Request $request)
    {
        $name=$request->name;
        $category=$request->email;
        $data=DB::table('user')->where('name',$name)->where('email',$category)->get();
        return view('table',compact('data'));
    }
    function oneselect(){

        $tushar=DB::table('users')->where('name')->where('email',$category)->get();
        return view ("table");
    }
}
