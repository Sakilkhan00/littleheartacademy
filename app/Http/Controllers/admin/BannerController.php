<?php

namespace App\Http\Controllers\admin;
// use App\Http\Requests\Blog\{CreateBlogRequest,UpdateBlogRequest};
use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use App\Helpers\helper as Helper;

class BannerController extends Controller
{
    
    public function index()
    {

        // $blog = $this->blogService->listBlog();
         $banners = Banner::all();
        return view('admin.pages.banners.index',compact('banners'));
    }
    public function create()
    {
        return view('admin.pages.banners.form');
    } 
    public function store(Request $request)
    {

        $rules = [
                'title' => 'required|unique:banners',
            ];
        
        $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }

        $banner = New Banner;
        $banner->title = $request->title;
        $banner->ordering = 0;
        if(empty($request->linkIpt)){
            $banner->video  = $request->link;
            $banner->type  = 0;
        }else{
            $fileName = "banner_".time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/banner'), $fileName);
            $banner->image  = $fileName;
            $banner->type  = 1;
        }

        
        if($banner->save())
        {
            return redirect('admin/banner/list')->with('success','Successfully Submit');
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
            if($banner = Banner::where('id',$id)->first())
            {
                return view('admin.pages.banners.edit',compact('banner'));
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
    public function update(Request $request, $id)
    {
        
        if(!empty($id))
        {
            $rules = [
                'title'       => 'required|unique:banners,title,'.$id,
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else
            {
                $banner = Banner::find($id);
                $banner->title = $request->title;
                $banner->ordering = 0;
                if(empty($request->linkIpt)){
                    $banner->video  = $request->link;
                    $banner->type  = 0;
                }else{
                    $fileName = "banner_".time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/banner'), $fileName);
                    $banner->image  = $fileName;
                    $banner->type  = 1;
                    $banner->video  = '';
                }

                if($banner->save()){
                    return redirect('admin/banner/list')->with('success','Successfully Updated.');
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
            if(Banner::findOrFail($id)->delete())
            {
                return redirect('admin/banner/list')->with('success','Successfully Deleted');
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
