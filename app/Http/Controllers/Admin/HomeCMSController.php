<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeCms;
use File;
class HomeCMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       $content = HomeCms::find($id);
       return view('admin.cms.index', compact('content'));
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

            $dirPath = "uploads/blogs";
            
            $cms                      = HomeCms::find(1);
            $cms->heading             = $request->heading;
            $cms->sub_heading         = $request->sub_heading;
            $cms->section_one_heading = $request->section_one_heading;
            $cms->section_one_content = $request->section_one_content;
            $cms->section_two_heading = $request->section_two_heading;
            $cms->section_two_content = $request->section_two_content;
            $cms->blog_one_heading    = $request->blog_one_heading;
            $cms->blog_one_content    = $request->blog_one_content;
            $cms->blog_two_heading    = $request->blog_two_heading;
            $cms->blog_two_content    = $request->blog_two_content;
            $cms->blog_three_heading  = $request->blog_three_heading;
            $cms->blog_three_content  = $request->blog_three_content;

    
            if($request->hasFile('banner_image')) {
                $fileName = $request->file('banner_image')->getClientOriginalName();
                if(File::exists(asset($dirPath.'/'.$fileName))){
                    File::delete(asset($dirPath.'/'.$fileName));
                }    
                $request->file('banner_image')->move(public_path($dirPath), $fileName);
                $cms->banner_image = $dirPath.'/'.$fileName;   
            }


            if($request->hasFile('section_two_image')) {
                $fileName = $request->file('section_two_image')->getClientOriginalName();
                if(File::exists(asset($dirPath.'/'.$fileName))){
                    File::delete(asset($dirPath.'/'.$fileName));
                }    
                $request->file('section_two_image')->move(public_path($dirPath), $fileName);
                $cms->section_two_image = $dirPath.'/'.$fileName;   
            }

            if($request->hasFile('blog_one_image')) {
                $fileName = $request->file('blog_one_image')->getClientOriginalName();
                if(File::exists(asset($dirPath.'/'.$fileName))){
                    File::delete(asset($dirPath.'/'.$fileName));
                }    
                $request->file('blog_one_image')->move(public_path($dirPath), $fileName);
                $cms->blog_one_image = $dirPath.'/'.$fileName;   
            }

            if($request->hasFile('blog_two_image')) {
                $fileName = $request->file('blog_two_image')->getClientOriginalName();
                if(File::exists(asset($dirPath.'/'.$fileName))){
                    File::delete(asset($dirPath.'/'.$fileName));
                }    
                $request->file('blog_two_image')->move(public_path($dirPath), $fileName);
                $cms->blog_two_image = $dirPath.'/'.$fileName;   
            }

            if($request->hasFile('blog_three_image')) {
                $fileName = $request->file('blog_three_image')->getClientOriginalName();
                if(File::exists(asset($dirPath.'/'.$fileName))){
                    File::delete(asset($dirPath.'/'.$fileName));
                }    
                $request->file('blog_three_image')->move(public_path($dirPath), $fileName);
                $cms->blog_three_image = $dirPath.'/'.$fileName;   
            }

            $cms->save();
    
            return redirect()->back()->with('success', "Venue CMS Updated");
        } catch (\Exception $e) {
            return redirect()->back()->with('success', $e->getMessages());
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
