<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Exhibitor;
use Illuminate\Http\Request;
use App\Mail\ExhibitorRegistered;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ExhibitorRequest;
use App\Mail\ExhibitorRegNotificationToAdmin;
use Illuminate\Support\Facades\Log;

class ExhibitorController extends Controller
{
    public function store(ExhibitorRequest $request){
        
      if(isset($request->captcha_value) && Helper::captchaGet('exhibitor') == $request->captcha_value){
           Helper::captchaRemove('exhibitor');
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
         $channel = Log::build([
                    'driver' => 'single',
                    'path' => storage_path('logs/exhibitor-log.log')
                ]);
        Log::stack([$channel])->info('Request_info', ['ip' => $request->server('REMOTE_ADDR')]);
        $data = [];

        $data["name"] = $request->name ?? '';
        $data["organization"] = $request->organization ?? '';
        $data["designation"] = $request->designation ?? '';
        $data["mobile"] = $request->mobile ?? '';
        $data["whatsapp_number"] = $request->whatsapp_number ?? '';
        $data["email"] = $request->email ?? '';
        $data["company_address"] = $request->company_address ?? '';
        $data["city"] = $request->city ?? '';
        $data["state"] = $request->state ?? '';
        $data["zip_code"] = $request->zip_code ?? '';
        $data["country"] = $request->country ?? '';
        $data["stand_space"] = $request->stand_space ?? '';
        $data["sponsorship"] = $request->sponsorship ?? '';
        $data["advertisement"] = $request->advertisement ?? '';
        $data["others"] = $request->others ?? '';

        $data['accept_promotional_updates'] = isset($$request->accept_promotional_updates) ? 1 : 0 ;
        
        
        $exhibitor = Exhibitor::create($data);

        Mail::to($request->email,EXHIBITOR_REG_MAIL_NAME)->send(new ExhibitorRegistered($exhibitor));
        Mail::to(EXHIBITOR_REG_TO_EMAIL,EXHIBITOR_REG_MAIL_NAME_FOR_ADMIN)->cc(EXHIBITOR_REG_TO_EMAIL_CC)->send(new ExhibitorRegNotificationToAdmin($exhibitor));

        return response()->json([
                    'status'       => true,
                    'redirect_url' => route('thank-you'), 
          ]);
        // return redirect('thank-you');

    }
}
