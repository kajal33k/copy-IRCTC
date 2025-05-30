<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function login(){
        return view('frontend.login');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function support(){
        return view('frontend.support');
    }

    public function enquiry(){
        return view('frontend.enquiry');
    }

    public function catering() {
        return view('frontend.catering');
    }
    
    public function passenger(){
        return view('frontend.passenger');
    }

    public function train(){
        return view('frontend.train');
    }

    public function reservation(){
        return view('frontend.reservation');
    }

    public function r_enquiry(){
        return view('frontend.r_enquiry');
    }
}
