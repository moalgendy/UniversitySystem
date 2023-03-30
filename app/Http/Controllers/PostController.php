<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.posts.create');
    }

    // public function index()
    // {
    //     return view('pages.posts.create');
    // }


    public function store(Request $request)
    {
        $Posts = new Post();
        $Posts->content=$request->content;
        $Posts->url=$request->url;
        $Posts->photo=Auth::user()->profile_photo_url;
        $Posts->name=Auth::user()->name;

        // $image=$request->image;
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        // $request->image->move('Posts',$imagename);
        // $Posts->image=$imagename;
        $Posts->save();
        // dd($Posts);

        Toastr::success('تم ارسال الخبر بنجاح','');

        return redirect()->back();
        
    }

}
