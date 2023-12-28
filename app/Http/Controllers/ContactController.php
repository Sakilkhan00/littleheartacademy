<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AdminMail;
use App\Mail\RequestAdmin;
use App\Mail\RequestQuate;
use App\Mail\ResponseMail;
use App\Models\Contact;
use Validator;
use Mail;
use PDF;

class ContactController extends Controller
{
    public function index(){
        
        return view('front.pages.contact_us');
    }

    public function store(Request $request)
    {
        $config = CstmConfig();
        $from_email = $config['contact_email'];
        

        if (!$request->isMethod('post')) {
            return redirect('/');
        }

        $user = array(
            'name'         => $request->full_name,
            'email'        => $request->email,
            'subject'      => $request->subject,
            'phone_number' => $request->mobile,
            'message'      => $request->comment,
            'company_mail' => $from_email,
            'company_phone' => $config['contact_phone'],
            'company_copyright' => $config['copyright_text'],
            'site_logo' => $config['site_logo'],
        );

        Mail::to($request->email)->send(new ResponseMail($user));
        Mail::to($from_email)->send(new AdminMail($user));
        return redirect()->back();

    }

   

}
