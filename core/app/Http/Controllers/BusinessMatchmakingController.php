<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessMatchmaking;
use App\Mail\BusinessMatchmaking as BusinessMatchmakingMail; 
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\BusinessMatchmakingRequest;
use App\Helpers\Helper;
use Symfony\Component\HttpFoundation\Session\Session; 

class BusinessMatchmakingController extends Controller
{
    public function create(Request $request){
        $name_prefixes = $this->namePrefixes();
        $products = $this->products();
        $states = config('states');
        $countries = config('countries');
        $banner_title = 'Business Matchmaking';
         $captcha_data = Helper::captchaSet('business_matchmaking');
        return view('pages.business-matchmaking.create',compact('name_prefixes','products','states','countries','banner_title' ,'captcha_data'));
    }

    public function store( BusinessMatchmakingRequest $request){
        
        if(isset($request->captcha_value) && Helper::captchaGet('business_matchmaking') == $request->captcha_value){
            Helper::captchaRemove('business_matchmaking');
        }else{
              $session = new Session();
             return response()->json([
             'status'       => false, 
             'captcha_error' => 'Invalid captcha'
             ]);
        }
        
        //  $captcha = Helper::captcha($request->input('g-recaptcha-response'));
        //   if(!$captcha){
        //         return response()->json([
        //         'status'       => false, 
        //         'captcha_error' => 'Invalid captcha'
        //     ]);
        //   }
           
        $data = $request->except(['_token','date','time','g-recaptcha-response','captcha_value']);
     
        if( $request->date &&  $request->time){
             $data['date'] = $request->date  .' '. $request->time;     
        } 
        $business_matchmaking = BusinessMatchmaking::create($data); 
        Mail::to(BUSINESS_MATCHMAKING_TO_EMAIL,BUSINESS_MATCHMAKING_MAIL_NAME_FOR_ADMIN)->cc(BUSINESS_MATCHMAKING_TO_EMAIL_CC)->send(new BusinessMatchmakingMail($business_matchmaking->id));
        
        return response()->json([
            'status'       => true,
            'redirect_url' => route('business-matchmaking-thank-you'), 
           ]);
        // return redirect()->route('business-matchmaking-thank-you');
    }
 
    public function thankYou(){
        return view('pages.business-matchmaking.thank-you');
    }

    public function namePrefixes() {
        return ['Mr.', 'Ms.', 'Dr', 'Proff'];        
    }

    public function products() {
        return [
            'Bakery & Confectionery Equipment',
            'Baking tools',
            'Packaging Machinery',
            'Packaging Solutions',
            'Ingredients',
            'Refrigeration',
            'Food Safety Solutions',
            'Allied products'
        ];          
    }
}
