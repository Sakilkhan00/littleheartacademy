<?php

namespace App\Http\Controllers\admin;

use App\Models\Course;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use App\Helpers\helper as Helper;

class CourseController extends Controller
{
    
    public function index()
    {
        // $guide = $this->guideService->listguide();
        $course = Course::all();
        return view('admin.pages.course.index',compact('course'));
    }
    public function create()
    {
        return view('admin.pages.course.form');
    } 
    public function store(Request $request)
    {
       
        $rules = [
                'title'       => 'required|unique:courses',
                'description' => 'required',
                'short_description' => 'required',
                'status'      => 'required',
                'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
                'meta_description' => 'required',
                'meta_keywords'    => 'required',
                'meta_title'       => 'required',
            ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $slug = Helper::slug($request);

        $files = $request->file('image');
        $destinationPath = public_path('/storage/course');       
        $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);

    	$obj = New Course;
    	$obj->title            = $request->title;
        $obj->meta_title       = $request->meta_title;
        $obj->meta_keywords    = $request->meta_keywords;
        $obj->meta_description = $request->meta_description;
        $obj->image            = $profileImage;
        $obj->status           = $request->status;
        $obj->description      = $request->description;
        $obj->short_description= $request->short_description;
        $obj->slug             = $slug;
    	
    	
        if($obj->save())
        {
            return redirect('admin/course/list')->with('success','Successfully Submit');
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
    public function edit($slug)
    {

        if(!empty($slug))
        {
            if($course = Course::where('id',$slug)->first())
            {
                return view('admin.pages.course.edit',compact('course'));
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
       
        if(!empty($request->course_id))
        {
            $rules = [
                'description' => 'required',
                'short_description' => 'required',
                'status'      => 'required',
                'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
                'meta_description' => 'required',
                'meta_keywords'    => 'required',
                'meta_title'       => 'required',
                'title'       => 'required|unique:courses,title,'.$request->course_id,
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else
            {
                $slug = Helper::slug($request);
                // $date = Helper::date_format($request);

                $obj = Course::find($request->course_id);
                if ($files = $request->file('image')) 
                {
                    $image_path = public_path("/storage/course/{$obj->image}");
                    if (File::exists($image_path)) 
                    {
                        unlink($image_path);
                    }
                    $destinationPath = public_path('/storage/course');       
                    $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $profileImage);
                }

                $obj->title       = $request->title;
                $obj->meta_title       = $request->meta_title;
                $obj->meta_keywords    = $request->meta_keywords;
                $obj->meta_description = $request->meta_description;
                $obj->image       = (!empty($profileImage)) ? $profileImage : $obj->image;
                $obj->status      = $request->status;
                $obj->description = $request->description;
                $obj->short_description= $request->short_description;
                $obj->slug        = $slug;
                if($obj->save()){
                    return redirect('admin/course/list')->with('success','Successfully Updated.');
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
            if($guide = Course::findOrFail($id))
            {
                $image_path = public_path("/storage/course/{$guide->image}");
                if (File::exists($image_path)) {
                    //File::delete($image_path);
                    unlink($image_path);
                }
                $guide->delete();
                return redirect('admin/course/list')->with('success','Successfully Deleted');
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

    public function courseView($slug){
        $course = Course::where('slug',$slug)->first();
        dd($course);
        return view('admin.pages.course.view');

    }
}
