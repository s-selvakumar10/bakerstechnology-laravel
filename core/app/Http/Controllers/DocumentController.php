<?php

namespace App\Http\Controllers;

use App\Mail\Brochure as BrochureMail;
use App\Mail\PostShowReport as PostShowReportMail;
use App\Mail\WorkshopBrochureMail;
use Illuminate\Http\Request;
use App\Mail\FoodConfluenceBrochure as FoodConfluenceBrochureMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DocumentRequest;
use App\Helpers\Helper;
use App\Models\Brochure;
use App\Models\FoodConfluenceBrochure;
use App\Models\PostShowReport;
use App\Models\WorkshopBrochure;
class DocumentController extends Controller
{
    public function brochure(DocumentRequest $request)
   {
       
          if(isset($request->captcha_value) && Helper::captchaGet('brochure') == $request->captcha_value){
            Helper::captchaRemove('brochure');
        }else{
            
             return response()->json([
             'status'       => false, 
             'captcha_error' => 'Invalid captcha'
             ]);
        }
        
    //   $captcha = Helper::captcha($request->input('g-recaptcha-response'));
    //       if(!$captcha){
    //             return response()->json([
    //             'status'       => false, 
    //             'captcha_error' => 'Invalid captcha'
    //         ]);
    //       }
           
      $data = $request->all();
      Brochure::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'mobile' => $data['mobile'],
          ]);
      Mail::to(BROCHURE_TO_EMAIL,BROCHURE_MAIL_NAME)->cc(BROCHURE_TO_EMAIL_CC)->send(new BrochureMail($data));
       return response()->json([
            'status'       => true,
            'redirect_url' => route('brochure-thank-you'), 
           ]);

   }

   public function foodConfluenceBrochure(DocumentRequest $request){
       
        if(isset($request->captcha_value) && Helper::captchaGet('food_confluence') == $request->captcha_value){
            Helper::captchaRemove('food_confluence');
        }else{
            
             return response()->json([
             'status'       => false, 
             'captcha_error' => 'Invalid captcha'
             ]);
        }
        
    //   $captcha = Helper::captcha($request->input('g-recaptcha-response'));
    //       if(!$captcha){
    //             return response()->json([
    //             'status'       => false, 
    //             'captcha_error' => 'Invalid captcha'
    //         ]);
    //       }
      $data = $request->all();
       FoodConfluenceBrochure::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'mobile' => $data['mobile'],
          ]);
          
      Mail::to(FOOD_CONFL_BROCHURE_TO_EMAIL,FOOD_CONFL_BROCHURE_MAIL_NAME)->send(new FoodConfluenceBrochureMail($data));
       return response()->json([
            'status'       => true,
            'redirect_url' => route('food-confluence-brochure-thank-you'), 
           ]);
   
   }
   
   public function postShowReport(DocumentRequest $request)
   {
       
         if(isset($request->captcha_value) && Helper::captchaGet('post_show_report') == $request->captcha_value){
            Helper::captchaRemove('post_show_report');
        }else{
            
             return response()->json([
             'status'       => false, 
             'captcha_error' => 'Invalid captcha'
             ]);
        }
    //   $captcha = Helper::captcha($request->input('g-recaptcha-response'));
    //       if(!$captcha){
    //             return response()->json([
    //             'status'       => false, 
    //             'captcha_error' => 'Invalid captcha'
    //         ]);
    //       }
      $data = $request->all();
      
       PostShowReport::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'mobile' => $data['mobile'],
          ]);
          
      Mail::to(POST_SHOW_REPORT_TO_EMAIL,POST_SHOW_REPORT_MAIL_NAME)->cc(POST_SHOW_REPORT_TO_EMAIL_CC)->send(new PostShowReportMail($data));
       return response()->json([
            'status'       => true,
            'redirect_url' => route('post-show-report-thank-you'), 
           ]);
   
   }
   
   public function workshopBrochure(DocumentRequest $request){
     
       if(isset($request->captcha_value) && Helper::captchaGet('workshop_brochure') == $request->captcha_value){
            Helper::captchaRemove('workshop_brochure');
        }else{
            
             return response()->json([
             'status'       => false, 
             'captcha_error' => 'Invalid captcha'
             ]);
        }
 
      $data = $request->all();
      
      WorkshopBrochure::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'mobile' => $data['mobile'],
          ]);
          
      Mail::to(WORKSHOP_BROCHURE_TO_EMAIL,WORKSHOP_BROCHURE_MAIL_NAME)->cc(WORKSHOP_BROCHURE_TO_EMAIL_CC)->send(new WorkshopBrochureMail($data));
       return response()->json([
            'status'       => true,
            'redirect_url' => route('workshop-brochure-thank-you'), 
           ]);
   }
}
