<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Request $request){

    	if($request->session()->has('uname')){

			if(session()->get('type')==1)
			return view('home.index');
			else
				return view('user.home');
    	}else{
    		return redirect('/login');
    	}
    }
}



