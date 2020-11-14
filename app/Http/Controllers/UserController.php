<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function index(){

        return view('register.index');
     }

     function list(){

            
            $std = \App\User::all();

            return view('user.list')->with('users', $std);

      
     }
     
    function store(Request $request){

        $request->validate([
            'username'=>'required',
            'radio'=>'required',
            'password'=>'required'
        ]);
        $user =new User();
      
        $user->username = $request->username;
        $user->password = $request->password;
        if($request->radio==1)
        {
            $user->type=1;
        }
        else{
            $user->type=2;
        }
     
        $user->save();
        return redirect()->route('login.index');
    }
    function delete($id){

        $user= User::find($id);
        $user->delete();
         
         return redirect()->route('home.index');
     }
 
}
