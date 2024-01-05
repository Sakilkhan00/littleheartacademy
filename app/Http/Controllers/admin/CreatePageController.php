<?php

namespace App\Http\Controllers\admin;

use App\Models\Navbar;
use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use DB;
use App\Helpers\helper as Helper;

class CreatePageController extends Controller
{

    public function createURL(){
        $navbar = Navbar::whereNotIn('route', ['/','contact-us'])->get();
        return view('admin.pages.createPage.create_url', compact('navbar'));
    }

    public function createURLStore(Request $request){
        $rules = [
                'menu_id' => 'required',
                'title' => 'required',
                'website'      => 'required',
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }

            $slug = Helper::slug($request);

            $page = New Page;
            $page->title            = $request->title;
            $page->menu_id            = $request->menu_id;
            $page->website_url            = $request->website;
            $page->slug             = $slug;
            $page->status             = $request->status;
            
            
            if($page->save())
            {
                return redirect('admin/create-page')->with('success','Successfully Submit');
            }
            else
            {
                return redirect('admin/create-page-url');
            }
    }


    public function index()
    {
        // $guide = $this->guideService->listguide();
        $page = DB::table('pages')
            ->leftJoin('navbars', 'pages.menu_id', '=', 'navbars.id')
            ->select('navbars.name','pages.id','pages.id','pages.menu_id','pages.title','pages.website_url','pages.status')
            ->get();
        
        return view('admin.pages.createPage.index',compact('page'));
    }
    public function create()
    {
        $navbar = Navbar::whereNotIn('route', ['/','contact-us'])->get();
        return view('admin.pages.createPage.form', compact('navbar'));
    } 
    public function store(Request $request)
    {
        
        $rules = [
                'menu_id' => 'required',
                'description' => 'required',
                'status'      => 'required',
                'meta_description' => 'required',
                'meta_keywords'    => 'required',
                'meta_title'       => 'required',
                'title'       => 'required',
            ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $slug = Helper::slug($request);
        // $date = Helper::date_format($request);

    	$page = New Page;
    	$page->menu_id            = $request->menu_id;
        $page->title            = $request->title;
        $page->meta_title       = $request->meta_title;
        $page->meta_keywords    = $request->meta_keywords;
        $page->meta_description = $request->meta_description;
        $page->status           = $request->status;
        $page->description      = $request->description;
        $page->slug             = $slug;
    	
    	
        if($page->save())
        {
            return redirect('admin/create-page')->with('success','Successfully Submit');
        }
        else
        {
            return redirect('admin/add-create-page');
        }
    }
    public function edit($slug)
    {
        if(!empty($slug))
        {
            if($page = Page::where('id',$slug)->first())
            {
                $navbar = Navbar::whereNotIn('route', ['/','contact-us'])->get();
                return view('admin.pages.createPage.edit_page',compact('page','navbar'));
            }
            else
            {
                return redirect('admin/page-not-found');
            }
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    } 

    public function editURL($id){
        $navbar = Navbar::whereNotIn('route', ['/','contact-us'])->get();
        $pageURL = Page::findOrFail($id);
        // dd($pageURL);
        return view('admin.pages.createPage.edit_url', compact('navbar','pageURL'));
    }

    public function updateURL(Request $request){
         $rules = [
                'menu_id' => 'required',
                'title' => 'required',
                'website_url'      => 'required',
            ];

            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }

            $slug = Helper::slug($request);

            $page = Page::find($request->id);
            $page->title            = $request->title;
            $page->menu_id          = $request->menu_id;
            $page->website_url      = $request->website_url;
            $page->slug             = $slug;
            $page->status      = $request->status;
            
            
            if($page->save())
            {
                return redirect('admin/create-page')->with('success','Successfully Submit');
            }
            else
            {
                return redirect('admin/create-page-url');
            }
    }


    public function update(Request $request)
    {
    
             $rules = [
                'menu_id' => 'required',
                'description' => 'required',
                'status'      => 'required',
                'meta_description' => 'required',
                'meta_keywords'    => 'required',
                'meta_title'       => 'required',
                'title'       => 'required',
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else
            {
                $slug = Helper::slug($request);

                $page = Page::find($request->id);
                $page->menu_id          = $request->menu_id;
                $page->title            = $request->title;
                $page->meta_title       = $request->meta_title;
                $page->meta_keywords    = $request->meta_keywords;
                $page->meta_description = $request->meta_description;
                $page->status           = $request->status;
                $page->description      = $request->description;
                $page->slug             = $slug;
                if($page->save()){
                    return redirect('admin/create-page')->with('success','Successfully Updated.');
                }
                
            }
    }
    public function delete($id)
    {
        if(!empty($id))
        {
            if($guide = Page::findOrFail($id))
            {
                $guide->delete();
                return redirect('admin/create-page')->with('success','Successfully Deleted');
            }
            else
            {
                return redirect('admin/page-not-found');
            }

        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
}
