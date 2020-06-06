<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function addpost()
    {
        return view('pages.admin.blog.add-post');
    }
    public function addpostPost(Request $request)
    {

        $post=new Posts;
        $post->title=$request->title;
        $post->tags=$request->tags;
        $post->description=$request->desc;
        if ($request->hasFile('image')) {
            $filenameWithExt=$request->file('image')->getClientOriginalName();
            $filename= pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/blog_images/',$fileNameToStore);
            $storagename='/storage/blog_image/'.$fileNameToStore;
        }
        else{
            $fileNameToStore='no-image.jpg';
        }
        $post->picture=$fileNameToStore;
        $post->save();
        return redirect()->back()->with('success','Post Published');
    }
}
