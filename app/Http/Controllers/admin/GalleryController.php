<?php

namespace App\Http\Controllers\admin;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use App\Helpers\helper as Helper;

class GalleryController extends Controller
{
    
    public function index()
    {
        // $blog = $this->blogService->listBlog();
        $gallery = Gallery::all();
        return view('admin.pages.Gallery.index',compact('gallery'));
    }
    public function create()
    {
        return view('admin.pages.Gallery.form');
    } 
    public function store(Request $request)
    {
        $rules = [
                'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
                'title'       => 'required|unique:galleries',
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }


        $files = $request->file('image');
        $destinationPath = public_path('/assets/gallery');       
        $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);

    	$blog = New Gallery;
    	$blog->title            = $request->title;
    	$blog->image_path            = $profileImage;
    	
        if($blog->save())
        {
            return redirect('admin/gallery')->with('success','Successfully Submit');
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
    public function edit($id)
    {
        if(!empty($id))
        {
            if($gallery = Gallery::where('id',$id)->first())
            {
                return view('admin.pages.Gallery.edit',compact('gallery'));
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
    public function update(Request $request)
    {
        
        if(!empty($request->gallery_id))
        {
            $rules = [
                'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
                'title'       => 'required|unique:galleries,title,'.$request->gallery_id,
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else
            {
                $gallery = Gallery::find($request->gallery_id);
                $profileImage ='';
                if ($files = $request->file('image')) 
                {
                    $image_path = public_path("assets/gallery/{$gallery->image_path}");
                   
                    if (File::exists($image_path)) 
                    {
                        unlink($image_path);
                    }
                    $destinationPath = public_path('assets/gallery');       
                    $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $profileImage);
                }

                $gallery->title       = $request->title;
                $gallery->image_path       = (!empty($profileImage)) ? $profileImage : $gallery->image_path;
               
                if($gallery->save()){
                    return redirect('admin/gallery')->with('success','Successfully Updated.');
                }
                
            }
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
    public function delete($id)
    {
        if(!empty($id))
        {
            if(Gallery::findOrFail($id)->delete())
            {
                return redirect('admin/gallery')->with('success','Successfully Deleted');
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
