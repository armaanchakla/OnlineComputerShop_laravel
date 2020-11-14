<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
            $std = \App\Product::all();
            return view('product.index')->with('user', $std);  
    }

    public function searchlist(Request $request)
    {
        $request->validate([
            'search'=>'required',
            'price'=>'required',
            
        ]);
        $std = \App\Product::where('price', '<' ,$request->price)->where('name',$request->search)->get();

        return view('product.searchlist')->with('user', $std);
    }

    public function ram()
    {
        $std = \App\Product::where('catagory', 'ram')->get();
           
        return view('product.ram')->with('user', $std);
    }

    public function casing()
    {
        $std = \App\Product::where('catagory', 'casing')->get();
           
        return view('product.casing')->with('user', $std);
    }

    public function graphics()
    {
        $std = \App\Product::where('catagory', 'graphics')->get();
           
        return view('product.graphics')->with('user', $std);
    }


    public function monitor()
    {
        $std = \App\Product::where('catagory', 'monitor')->get();
           
        return view('product.monitor')->with('user', $std);
    }

    public function storage()
    {
        $std = \App\Product::where('catagory', 'storage')->get();
           
        return view('product.storage')->with('user', $std);
    }

    public function parmanent()
    {
        $std = \App\Product::where('subcatagory', 'parmanent storage')->get();
           
        return view('product.parmanent')->with('user', $std);
    }

    public function portable()
    {
        $std = \App\Product::where('subcatagory', 'portable storage')->get();
           
        return view('product.portable')->with('user', $std);
    }

    public function search()
    {
            return view('product.search');
    }
}
