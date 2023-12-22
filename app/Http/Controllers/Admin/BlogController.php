<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

use File; 

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderByDESC('id')->paginate(20);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
            $dirPath = "uploads/blogs";
            $image   = "";
    
            if($request->hasFile('image')) {
                $fileName = $request->file('image')->getClientOriginalName();
                if(File::exists(asset($dirPath.'/'.$fileName))){
                    File::delete(asset($dirPath.'/'.$fileName));
                }    
                $request->file('image')->move(public_path($dirPath), $fileName);
                $image    =  $dirPath.'/'.$fileName;    
            }
            $blog = Blog::create([
                "title"   => $request->title,
                "date"    => date('Y-m-d'),
                "blog_by" => $request->blog_by,
                "image"   => $image,
                "content" => $request->content,
            ]);

            return redirect('admin/blogs')->with('success', 'Blog Added..!!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
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
        $blog = Blog::find($id);
        return view('admin.blogs.edit', compact('blog'));

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
        try {
            //code...
            $dirPath = "uploads/blogs";
            $image   = "";
    
            if($request->hasFile('image')) {
                $fileName = $request->file('image')->getClientOriginalName();
                if(File::exists(asset($dirPath.'/'.$fileName))){
                    File::delete(asset($dirPath.'/'.$fileName));
                }    
                $request->file('image')->move(public_path($dirPath), $fileName);
                $image    =  $dirPath.'/'.$fileName;    
            }
            $blog = Blog::find($id);
            $blog->update([
                "title"   => $request->title,
                "blog_by" => $request->blog_by,
                "image"   => $image,
                "content" => $request->content,
            ]);

            return redirect('admin/blogs')->with('success', 'Blog updated..!!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
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
        $content = Blog::find($id);
        $content->delete(); 
        echo 1;
    }
}
