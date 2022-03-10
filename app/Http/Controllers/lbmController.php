<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lbmController extends Controller
{
     public function view($id)
    {
        
        $res = Product::find($id);
        $res1 = Product::all();
        $cat=Category::find($res->category_id);
        $colorList = explode(',',$res->colors);
    	$cat = Category::all();
        return view('store.product')
            ->with('product', $res)
            ->with('products', $res1)
            ->with('cat', $cat)
            ->with('colors',$colorList);   
    }
      
     public function product()
    {
    	
    	return view('product');
            
    }
    
    public function contact()
    {
    	
    	return view('contact');
            
    }
    public function aboutus()
    {
    	
    	return view('aboutus');
            
    }
     
}