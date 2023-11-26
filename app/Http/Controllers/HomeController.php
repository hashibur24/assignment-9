<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(Request $request){
        
        return view('Home');
    }

    function about(Request $request){
        
        return view('About');
    }
    function services(Request $request){
        
        return view('Services');
    }
    function project(Request $request){
        
        return view('Project');
    }
    function contact(Request $request){
        
        return view('ContactView');
    }
}
