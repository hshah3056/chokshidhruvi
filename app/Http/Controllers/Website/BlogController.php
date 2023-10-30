<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::whereStatus(1)->get();
        return view('website.blog.blog-list',compact('blogs'));
    }

    public function details($id)
    {
        $blogDetails = Blog::whereStatus(1)->whereId($id)->first();
        $latestBlogs = Blog::whereStatus(1)->latest()->take(5)->get();
        return view('website.blog.blog-details',compact('blogDetails','latestBlogs'));
    }

}
