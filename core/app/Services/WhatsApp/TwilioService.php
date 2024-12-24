<?php

namespace App\Services\WhatsApp;

 

class TwilioService
{
    protected $account_sid;
    protected $auth_token;
    protected $from;
  
    public function __construct()
    {
        $this->account_sid = env('TWILIO_SID');
        $this->auth_token = env('TWILIO_AUTH_TOKEN');
        $this->from = 'whatsapp:' . env('TWILIO_PHONE_NUMBER');
         
    }
    
    public function sendMessage($to, $message,$pdf_url = '')
    {
        
        try {
                $from_number =  $this->from; 
                $to_number = 'whatsapp:' . $to;   
                
                $account_sid = $this->account_sid;
                $auth_token = $this->auth_token;
                  
                
                $twilio_url = "https://api.twilio.com/2010-04-01/Accounts/$account_sid/Messages.json";
                
                $data = [
                     'From' => $from_number,
                     'To' => $to_number,
                     'Body' => $message ?? '' 
                    ];
                   
                if(!empty($pdf_url)){  
                     $data['MediaUrl'] = $pdf_url;
                }
               
               
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $twilio_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($ch, CURLOPT_USERPWD, "$account_sid:$auth_token");  
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
                
              
                $response = curl_exec($ch);
                
                
                if (curl_errno($ch)) {
                   $res =  [
                       'status' => false,
                       'msg'    => 'Error:' . curl_error($ch),
                       'data' => []
                       ];
                } else {
                    // Success, print response
                   $res =  [
                        'status' => true,
                        'msg' => 'Success',
                        'data' => json_decode($response,true)
                       ];
                }
                
                 
                curl_close($ch);
                
                return $res; 
        } catch (\Exception $e) { 
            return [
                        'status' => false,
                        'msg' => 'WhatsApp message fail: ' . $e->getMessage(),
                        'data' => []
                       ];
        }
    }
    
    public function fetchMessageResource($message_sid){
        try {
            $twilio_account_sid =  $this->account_sid;
            $twilio_auth_token = $this->auth_token;
            
          
            $url = "https://api.twilio.com/2010-04-01/Accounts/{$twilio_account_sid}/Messages/{$message_sid}.json";
         
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_USERPWD, "{$twilio_account_sid}:{$twilio_auth_token}"); 
            $response = curl_exec($ch);

            if(curl_errno($ch)) {
                 $res =  [
                       'status' => false,
                       'msg'    => 'Error:' . curl_error($ch),
                       'data' => []
                       ];
            } else {
                 $res =  [
                        'status' => true,
                        'msg' => 'Success',
                        'data' => json_decode($response,true)
                       ];
            }
            
            curl_close($ch);
            return $res; 
        } catch (\Exception $e) { 
            return [
                        'status' => false,
                        'msg' => 'WhatsApp message fail: ' . $e->getMessage(),
                        'data' => []
                       ];
        }

    }
    
}
