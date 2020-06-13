<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Request $request){
        return view('website.home');
    }

    public function maps(Request $request){
        return view('website.maps');
    }

    public function hospitals(Request $request){
        return view('website.hospitals');
    }

    public function doctors(Request $request){
        return view('website.doctors');
    }

    public function contact(Request $request){
        return view('website.contact');
    }


}
