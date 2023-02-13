<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class StudentsController extends Controller
{
    public function regiShow(){
        return view('auth.register');
    }
    public function regiShowCustom(){
        return view('auth.regi');
    }
    public function dashboard(){
        $dashboard = User::where('name','nn')->get();
        return $dashboard;
       // return  view ('dashboard');
    }
    public function create(){
        return  view ('create');
    }
    public function store(request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'department'=>'required',
            'session'=>'required',
            'address'=>'required',
            'passing_year'=>'required',
            'gender'=>'required',
            'current_job'=>'required',
            'email'=>'required',
            'password'=>'required',
              
        ]);

        User::create([
          'id'=>$request->id,
          'name'=>$request->name,
          'department'=>$request->department,
          'session'=>$request->session,
          'address'=>$request->address,
          'passing_year'=>$request->passing_year,
          'gender'=>$request->gender,
          'current_job'=>$request->current_job,
          'email'=>$request->email,
          'password'=>bcrypt($request->password),

        ]);
        return view('success');

    }
    public function edit($id)

    {
        $user=User::findorfail($id);
        // return $user;
        // $user = User::all();
    // return view('dashboard',compact('admin'));
        return view('edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = User::findorfail($id);
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'department'=>'required',
            'session'=>'required',
            'address'=>'required',
            'passing_year'=>'required',
            'gender'=>'required',
            'current_job'=>'required',
            'email'=>'required',
            'password'=>'required',
              
        ]);

        User::where('id',$id)->update([
          'id'=>$request->id,
          'name'=>$request->name,
          'department'=>$request->department,
          'session'=>$request->session,
          'address'=>$request->address,
          'passing_year'=>$request->passing_year,
          'gender'=>$request->gender,
          'current_job'=>$request->current_job,
          'email'=>$request->email,
          'password'=>bcrypt($request->password),

        ]);
        return view('update');
 
    }
    public function delete($id)
    {
        $user = User::find($id); 
        $user->delete();
        return redirect('/')->with('status',"data deleted succeswsfully");
    }
    

}
