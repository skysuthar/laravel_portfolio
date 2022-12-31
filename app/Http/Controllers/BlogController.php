<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = blog::all();
        return view('admin_pannel.showBlog',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_pannel.addBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'blogName' => 'required',
            'blogImage' => 'required',
            'blogAbout' => 'required',
            'blogDescription' => 'required',
        ],
        [
            'blogName.required' => "This field is required*",
            'blogImage.required' => "This field is required*",
            'blogAbout.required' => "This field is required*",
            'blogDescription.required' => "This field is required*",
        ]);

        $blog = new blog();
        $blog->blog_name = $request->blogName;
        $blog->blog_about = $request->blogAbout;
        $blog->blog_description = $request->blogDescription;
        $blog->blog_status = $request->blogStatus;

        $path = public_path('root/blogImages/');
        $fileName = $request->file('blogImage')->getClientOriginalName();
        if(!File::isDirectory($path))
        {
            File::makeDirectory($path, 0777, true, true);
            $request->file('blogImage')->move($path, $fileName);
        }else{
            $request->file('blogImage')->move($path, $fileName);
        }
        $blog->blog_image = $fileName;

        if($blog->save()){
            $request->session()->flash('done','Project added succesfully');
            return redirect()->back();
        }else{
            $request->session()->flash('erroe','Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::where(['id' => $id])->first();
        return view ('admin_pannel.addBlog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {

         $request->validate([
            'blogName' => 'required',
            'blogAbout' => 'required',
            'blogDescription' => 'required',
        ],
        [
            'blogName.required' => "This field is required*",
            'blogAbout.required' => "This field is required*",
            'blogDescription.required' => "This field is required*",
        ]);
        $blog = blog::where(['id' => $request->db_id])->first();
        $blog->blog_name = $request->blogName;
        $blog->blog_about = $request->blogAbout;
        $blog->blog_description = $request->blogDescription;
        $blog->blog_status = $request->blogStatus;
        if(!empty($request->file('blogImage'))){
            $path = public_path('root/projectImages/');
            $fileName = $request->file('blogImage')->getClientOriginalName();
            $request->file('blogImage')->move($path, $fileName);
            $project->project_image = $fileName;
        }
        if($blog->save()){
            $request->session()->flash('done','Blog Updated succesfully');
            return redirect()->back();
        }else{
            $request->session()->flash('erroe','Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blog = blog::where(['id' => $request->db_id])->delete();
        $request->session()->flash('done','Blog Deleted Succesfully');
        return redirect()->back();
    }
}
