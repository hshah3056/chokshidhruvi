<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function details(Request $request){
//        dd($request->id);
        $blogDetails = Blog::where('status',1)->whereId($request->id)->first();
        return view('website.blog.details',[
            'blogs' => $blogDetails
        ]);
    }
}
