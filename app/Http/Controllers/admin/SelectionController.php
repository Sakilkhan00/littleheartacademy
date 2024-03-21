<?php

namespace App\Http\Controllers\admin;

use App\Models\Selection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use App\Helpers\helper as Helper;

class SelectionController extends Controller
{
    
    public function index()
    {
        // $blog = $this->blogService->listBlog();
        $selection = Selection::all();
        return view('admin.pages.selection.index',compact('selection'));
    }
    public function create()
    {
        return view('admin.pages.selection.form');
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
        $destinationPath = public_path('/assets/selection');       
        $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);

    	$blog = New Selection;
    	$blog->title            = $request->title;
    	$blog->image_path            = $profileImage;
    	
        if($blog->save())
        {
            return redirect('admin/selection')->with('success','Successfully Submit');
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
            if($selection = Selection::where('id',$id)->first())
            {
                return view('admin.pages.selection.edit',compact('selection'));
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
        
        if(!empty($request->selection_id))
        {
            $rules = [
                'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
                'title'       => 'required|unique:galleries,title,'.$request->selection_id,
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else
            {
                $selection = Selection::find($request->selection_id);
                $profileImage ='';
                if ($files = $request->file('image')) 
                {
                    $image_path = public_path("assets/selection/{$selection->image_path}");
                   
                    if (File::exists($image_path)) 
                    {
                        unlink($image_path);
                    }
                    $destinationPath = public_path('assets/selection');       
                    $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $profileImage);
                }

                $selection->title       = $request->title;
                $selection->image_path       = (!empty($profileImage)) ? $profileImage : $selection->image_path;
               
                if($selection->save()){
                    return redirect('admin/selection')->with('success','Successfully Updated.');
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
 		$selection = Selection::find($id);
    	$image_path = public_path("assets/selection/{$selection->image_path}");
                   
        if (File::exists($image_path)) 
        {
            unlink($image_path);
        }
        $selection->delete();
        return redirect('admin/selection')->with('success','Successfully Deleted');
    }

    public function view(){
        $achievements = Selection::orderBy('id', 'desc')->get();
        return view('front.pages.achievements',compact('achievements'));
    }






}
