<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::whereStatus(1)->get();
        return view('admin-panel.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin-panel.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                if($request->isMethod('post')) {

                        $request->validate([
                            'name' => 'required',
                            'blog_content' => 'required',
                            'images.*' => 'required|image|mimes:jpg,png|max:2048',
                            'status' => 'required'
                        ], [
                            'name.required' => 'name is required',
                            'blog_content.required' => 'Blog Content is required',
                            'images.required' => 'images is required',
                            'status.required' => 'status is required'
                        ]);

                        if ($request->file('images')) {
                            $allowedfileExtension = ['jpg', 'png'];
                            $files = $request->file('images');
                            $uploadImgs = [];

                            foreach ($files as $file) {
                                $filename = $file->getClientOriginalName();
                                $extension = $file->getClientOriginalExtension();
                                $check = in_array($extension, $allowedfileExtension);
                                if ($check) {
                                    $file->move('uploads/', $filename);
                                    $uploadImgs[] = $filename;
                                }
                            }
                        }

                        if(!empty($uploadImgs)){
                            Blog::create([
                                'name' => $request->name,
                                'text' => $request->blog_content,
                                'status' => $request->status,
                                'images' => json_encode($uploadImgs)
                            ]);
                            return redirect()->route('blog-data-list.index')->with(['success' => 'your records are successfully updated..!']);
                        }else{
                            return redirect()->route('blog-data-list.index')->with(['error' => 'Your Uploaded File is not in correct format...!! only accept the .jpg and .png file']);
                        }
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogDetails = Blog::whereId($id)->first();
        return view('admin-panel.blogs.edit',compact('blogDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::whereId($id)->first();
        if($request->isMethod('put')) {

            $request->validate([
                'name' => 'required',
                'blog_content' => 'required',
                'images.*' => 'required|image|mimes:jpg,png|max:2048',
                'status' => 'required'
            ], [
                'name.required' => 'name is required',
                'blog_content.required' => 'Blog Content is required',
                'images.required' => 'images is required',
                'status.required' => 'status is required'
            ]);

            if ($request->file('images')) {
                $allowedfileExtension = ['jpg', 'png'];
                $files = $request->file('images');
                $uploadImgs = [];

                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check = in_array($extension, $allowedfileExtension);
                    if ($check) {
                        $file->move('uploads/', $filename);
                        $uploadImgs[] = $filename;
                    }
                }
            }

            $blog->name = $request->name;
            $blog->text = $request->blog_content;
            $blog->status = $request->status;
            $blog->images = !empty($uploadImgs) ? json_encode($uploadImgs) : $blog->images;
            $blog->save();

            return redirect()->route('blog-data-list.index')->with(['success' => 'Your Blog Details Are Successfully Updated...!!!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
