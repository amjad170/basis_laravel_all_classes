<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendContrller extends Controller
{
    //Frontend index
    public function index(){
        return view('frontend.index');
    }

    //Frontend abbout
    public function about(){
        return view('frontend.about');
    }
     //Frontend contact
     public function contact(){
        return view('frontend.contact');
    }
     //Frontend menu
     public function menu(){
        return view('frontend.menu');
    }
    //Frontend news
    public function news(){
        return view('frontend.news');
    }
   
    //Frontend abbout
    public function news_details(){
        return view('frontend.news_details');
    }
  
}
