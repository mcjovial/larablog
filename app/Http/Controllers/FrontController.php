<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data = [];
        $data['title'] = 'Homepage';

        return view('front.index', compact('data'));
    }

    public function about(){
        $data = [];
        $data['title'] = 'About Us';

        return view('front.about', compact('data'));
    }

    public function contact() {
        $data = [];
        $data['title'] = 'Contact Us';

        return view('front.contact', compact('data'));
    }
}
