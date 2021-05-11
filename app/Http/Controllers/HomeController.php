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
}
