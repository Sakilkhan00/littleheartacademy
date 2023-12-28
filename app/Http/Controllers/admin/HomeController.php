<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobsPost;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        // $total_blog = Blog::count();
        // $total_post = JobsPost::count();

        $total_blog = 0;
        $total_post = 0;
       
        return view('admin.pages.dashboard', compact('total_blog','total_post'));
    }
}
