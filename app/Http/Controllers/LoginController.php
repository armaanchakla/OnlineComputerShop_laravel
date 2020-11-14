<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){

		$user = User::where('username', $request->username)
					->where('password', $request->password)
					->first();

		if($user != ""){
			$request->session()->put('uname', $request->input('username'));

			$request->session()->put('user', $user);
			if($user->type==1)
			{
				$request->session()->put('type',1);
				return redirect()->route('home.index');
			}
			else if($user->type==2)
			{
				$request->session()->put('type',2);
				return redirect()->route('customer.home');
			}

			
		}else{

			$request->session()->flash('msg', 'invalid username/password');

			return redirect()->route('login.index');
		}
	}
}
