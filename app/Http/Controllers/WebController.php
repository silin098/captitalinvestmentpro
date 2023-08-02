<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }


    public function terms(){
        return view('terms');
    }

    public function contact(){
        return view('contact');
    }

    public function policy(){
        return view('policy');
    }

    public function career(){
        return view('career');
    }

    public function customerScreening(){
        return view('customer-screening-specialist');
    }

    public function humanResource(){
        return view('human-resource');
    }

    public function admin(){
        return view('administrator');
    }

    public function technician(){
        return view('it-technician');
    }



}
