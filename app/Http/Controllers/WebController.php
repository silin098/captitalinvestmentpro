<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Support\Facades\Http;
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

    public function developBusiness(){
        return view('business-development');
    }

    public function exchangeCrypto(){


        $response = Http::get('http://hn.algolia.com/api/v1/search?query=crypto');
        $jsonData = json_decode($response);

//        return dump($jsonData);
        return view('crypto',compact('jsonData'));

    }





}
