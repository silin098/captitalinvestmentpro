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


        $response = Http::get('https://newsapi.org/v2/everything?q=crypto&from=2022-07-16&sortBy=publishedAt&apiKey=8a26e4600abe4f5fa85ff5167b9e2e2f');
        $jsonData = $response->json();

        return view('crypto',['data'=>$jsonData]);

    }





}
