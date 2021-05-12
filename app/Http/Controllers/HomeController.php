<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $latest = Blog::orderBy('created_at', 'desc')->take(3)->get(); 
        return view('home', [ 'latest'=> $latest ]);
    }

    public function blogs_index()
    {

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10); 
        return view('blogs.index', [ 
            'blogs' => $blogs
            ]);
        }
        
    public function blogs_show($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->firstOrFail();
        $latest = Blog::orderBy('created_at', 'desc')->take(3)->get(); 
        return view('blogs.show',[
            'blog' => $blog,
            'latest'=>$latest
        ]);
    }

}
