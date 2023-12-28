<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Validator;
use File;
use App\Helpers\helper as Helper;
use App\Helpers\SqlFun;



class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('admin.pages.setting.form');
    }


    public function settingLogo()
    { 
        return view('admin.pages.setting.logo');
    }

    public function SettingTheme()
    { 
        return view('admin.pages.setting.theme');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addOption(Request $request)
    {
        $config = CstmConfig();
        $status = "";
        if ($request->action =="logo_watermark") {
           
            $valid_formats = array("jpg", "jpeg", "png"); // Valid image formats
            

            if (isset($request->favicon) && $request->favicon != "") {
             
                $ext = $request->favicon->extension();
                $ext = strtolower($ext);
                //File extension check
                if (in_array($ext, $valid_formats)) {
                    $filename = "favicon" . '.' . $ext; 
                        
                    $filePath = public_path('storage/logo/' . $filename);
                    if(file_exists($filePath)){
                        unlink($filePath);
                    }

                    if ($request->favicon->move(public_path('storage/logo/'), $filename)) {
                        SqlFun::update_option("site_favicon", $filename);
                    } 
                } else {
                    $status = "error";
                    $message = 'Only allowed jpg, jpeg png';
                    echo "Only allowed jpg, jpeg png"; exit;
                }

            }

            if (isset($request->file) && $request->file != "") {

                $ext = $request->file->extension();
                $ext = strtolower($ext);
                //File extension check

                if (in_array($ext, $valid_formats)) {
                
                    $filename = $config['tpl_name'] . "_logo" . '.' . $ext;
                    $filePath = public_path('storage/logo/' . $filename);
                    if(file_exists($filePath)){
                        unlink($filePath);
                    }
                    
                    if ($request->file->move(public_path('storage/logo/'), $filename)) {
                        SqlFun::update_option("site_logo", $filename);
                        $status = "success";
                        $message = ' Site Logo updated Successfully ';
                    } else {
                        $status = "error";
                        $message = 'Error in uploading Logo';
                    }
                } else {
                    $status = "error";
                    $message = 'Only allowed jpg, jpeg png';
                }

            }

            if (isset($request->footer_logo) && $request->footer_logo != "") {
                $ext = $request->footer_logo->extension();
                $ext = strtolower($ext);
                //File extension check
                if (in_array($ext, $valid_formats)) {

                    $filename = $config['tpl_name'] . "_footer_logo" . '.' . $ext;
                    $filePath = public_path('storage/logo/' . $filename);
                    if(file_exists($filePath)){
                        unlink($filePath);
                    }
                    //Moving file to uploads folder
                    if ($request->footer_logo->move(public_path('storage/logo/'), $filename)) {
                        SqlFun::update_option("site_logo_footer", $filename);
                        $status = "success";
                        $message = ' Site Logo updated Successfully ';
                    } else {
                        $status = "error";
                        $message = 'Error in uploading Logo';
                    }
                } else {
                    $status = "error";
                    $message = 'Only allowed jpg, jpeg png';
                }

            }

            if (isset($request->watermark) && $request->watermark != "") {
                $ext = $request->watermark->extension();
                $ext = strtolower($ext);
                //File extension check
                if (in_array($ext, $valid_formats)) {
                    
                    $filename = "watermark" . '.' . $ext;
                    $filePath = public_path('storage/logo/' . $filename);
                    if(file_exists($filePath)){
                        unlink($filePath);
                    }
                    //Moving file to uploads folder
                    if ($request->watermark->move(public_path('storage/logo/'), $filename)) {
                        $status = "success";
                        $message = ' Watermark Logo updated Successfully ';
                    } else {
                        $status = "error";
                        $message = 'Error in uploading Watermark';
                    }
                } else {
                    $status = "error";
                    $message = 'Only allowed jpg, jpeg png';
                }

            }

            if (isset($request->adminlogo) && $request->adminlogo != "") {
                
                $ext = $request->adminlogo->extension();
                $ext = strtolower($ext);
                //File extension check
                if (in_array($ext, $valid_formats)) {

                    $filename = "adminlogo" . '.' . $ext;
                    $filePath = public_path('storage/logo/' . $filename);
                    if(file_exists($filePath)){
                        unlink($filePath);
                    }

                    //Moving file to uploads folder
                    if ($request->adminlogo->move(public_path('storage/logo/'), $filename)) {
                        SqlFun::update_option("site_admin_logo", $filename);
                        $status = "success";
                        $message = ' Adminlogo Logo updated Successfully ';
                    } else {
                        $status = "error";
                        $message = 'Error in uploading adminlogo';
                    }
                } else {
                    $status = "error";
                    $message = 'Only allowed jpg, jpeg png';
                }

            }

        }

        if ($request->action =="theme_setting") {
            SqlFun::update_option("contact_validation", $request->contact_validation);
            SqlFun::update_option("listing_view", $request->listing_view);
            SqlFun::update_option("theme_color", $request->theme_color);
            SqlFun::update_option("meta_keywords", $request->meta_keywords);
            SqlFun::update_option("meta_description", $request->meta_description);
            SqlFun::update_option("contact_address", $request->contact_address);
            SqlFun::update_option("contact_phone", $request->contact_phone);
            SqlFun::update_option("contact_email", $request->contact_email);
            SqlFun::update_option("footer_text", $request->footer_text);
            SqlFun::update_option("copyright_text", $request->copyright_text);
            SqlFun::update_option("facebook_link", $request->facebook_link);
            SqlFun::update_option("twitter_link", $request->twitter_link);
            SqlFun::update_option("googleplus_link", $request->googleplus_link);
            SqlFun::update_option("youtube_link", $request->youtube_link);
            SqlFun::update_option("external_code", $request->external_code);
        }
    
        return redirect()->back();











    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $files = $request->file('image');
        $destinationPath = public_path('/upload/client');       
        $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);

    	$client = New Client;
    	$client->name            = $request->name;
        $client->logo            = $profileImage;
        $client->status          = $request->status;
    	
    	
        if($client->save())
        {
            return redirect()->route('career.index')->with('success','Successfully Submit');
        }
        else
        {
            return redirect()->route('career.index')->with('error','Form Not Submit');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('career.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        if($client = Client::findOrFail($id))
        {
            return view('admin.pages.carrer.edit',compact('client'));
        }
        else
        {
            return redirect()->route('career.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Carrerupdate(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        if($files = $request->file('image')){
            $destinationPath = public_path('/upload/client');       
            $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }else{
            $profileImage = $request->prelogo;
        }

    	$client = Client::find($id);
    	$client->name            = $request->name;
        $client->logo            = $profileImage;
        $client->status          = $request->status;
    	
    	
        if($client->save())
        {
            return redirect()->route('career.index')->with('success','Successfully Submit');
        }
        else
        {
            return redirect()->route('career.index')->with('error','Form Not Submit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CarrerDelete($id)
    {
        if(Client::findOrFail($id)->delete())
        {
            return redirect()->route('career.index')->with('success','Successfully Deleted');
        }
        else
        {
            return redirect()->route('career.index')->with('error','Not Deleted');
        }
    }




}
