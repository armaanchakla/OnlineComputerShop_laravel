<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index($id)
    {
        $std = \App\Product::where('id', $id)->get();
       
        return view('cart.add')->with('id',$id)->with('user', $std);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product'=>'required',
            'price'=>'required',
            'radio'=>'required'
        ]);
        $user =new Cart();
      
        $user->productid = $request->product;
        $user->price = $request->price;
        $user->name=session()->get('uname');
        if($request->radio==1)
        {
            $user->payment='Cash';
        }
        else{
            $user->type='Online';
        }
     
        $user->save();
        return redirect()->route('customer.home');
    }
s
}
