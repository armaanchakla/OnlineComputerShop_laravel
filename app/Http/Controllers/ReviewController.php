<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
     
  public  function reviewlist(){

            
        $std = \App\Review::all();

        return view('review.list')->with('users', $std);

  
 }
    public function index($id)
    {
        
        return view('review.index')->with('id',$id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'product'=>'required',
            'comment'=>'required'
        ]);
        $Review =new Review();
      
        $Review->name = $request->name;
        $Review->productid = $request->product;
        $Review->comment = $request->comment;
      
     
        $Review->save();
        return redirect()->route('customer.home');
    }

    function delete($id){

        $user= Review::find($id);
        $user->delete();
         
         return redirect()->route('home.index');
     }
}
