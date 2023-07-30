<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('website.blog.blog-list');
    }

    public function details()
    {
        return view('website.blog.blog-details');
    }

}
