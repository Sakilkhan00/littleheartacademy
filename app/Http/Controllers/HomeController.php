<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Course;
use DB;
use App\Mail\Subscribe;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home(){
        $banner = Banner::all();
        // dd($banner);
        $gallery = Gallery::take(4)->select('id','title','image_path')->orderBy('id', 'DESC')->get();
        $course = Course::where('status', 1)->select('image','slug', 'title')->get();
        return view('front.pages.index', compact('banner','gallery','course'));
    }

    public function StaticPage($slug){
        $page = Page::where('slug', $slug)->first();
        if($page){
            return view('front.pages.static_page', compact('page'));
        }else{
            dd("Error");
        }
    }
    

    public function aboutUs(){
        $ComanyReview = ComanyReview::find(1);

        return view('front.pages.about_us', compact('ComanyReview'));
    }

    public function galleryView()
    {
        $gallery = Gallery::select('id','title','image_path')->orderBy('id', 'DESC')->get();
        return view('front.pages.gallery_view', compact('gallery'));
    }

}
