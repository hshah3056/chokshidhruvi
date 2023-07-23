<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home');
    }

    public function about()
    {
        return view('website.about');
    }

    public function ourPackages(){
        return view('website.our-package');
    }

    public function contact(){

        return view('website.contact');
    }
}
