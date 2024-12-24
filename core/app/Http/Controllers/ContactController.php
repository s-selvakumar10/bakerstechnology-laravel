<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;
use App\Helpers\Helper;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactForm(ContactFormRequest $request){
          $captcha = Helper::captcha($request->input('g-recaptcha-response'));
           if(!$captcha){
                return response()->json([
                'status'       => false, 
                'captcha_error' => 'Invalid captcha'
            ]);
           }
           
        $data = $request->all();
        Contact::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'mobile' => $data['mobile'],
          'designation' => $data['designation'],
          'company' => $data['company'],
          'message' => strip_tags($data['message']),
          ]);
          
        Mail::to(CONTACT_TO_EMAIL,CONTACT_MAIL_NAME)->cc(CONTACT_TO_EMAIL_CC)->send(new ContactForm($data));
         request()->session()->flash('success','successfully submitted');
         
          return response()->json([
            'status'       => true,
            'redirect_url' => url()->previous(), 
           ]);
        // return redirect()->back();
    }
}
