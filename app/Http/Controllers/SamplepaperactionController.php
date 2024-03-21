<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Guide;
use Validator;
use App;
use Mail;
use App\Mail\SamplepaperAdminMail;
use App\Mail\SampleResponseMail;



class SamplepaperactionController extends Controller
{

    public function sendMail(Request $request){
        $config = CstmConfig();
        $from_email = $config['contact_email'];

        $user = array(
            'student_name'          => $request->student_name,
            'dob'                   => $request->dob,
            'state'                 => $request->state,
            'city'                  => $request->city,
            'pincode'               => $request->pincode,
            'mobile1'               => $request->mobile1,
            'father_name'           => $request->father_name,
            'mobile3'               => $request->mobile3,
            'class_name'            => $request->class_name,
            'address'               => $request->address,
            'remark'                => $request->remark,
            'company_mail'          => $from_email,
            'company_phone'         => $config['contact_phone'],
            'company_copyright'     => $config['copyright_text'],
            'site_logo'             => $config['site_logo'],
        );

        // Mail::to($request->email)->send(new SampleResponseMail($user));
        Mail::to($from_email)->send(new SamplepaperAdminMail($user));
        return redirect()->back();

    }
}
