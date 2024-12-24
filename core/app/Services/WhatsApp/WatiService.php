<?php

namespace App\Services\WhatsApp;

 

class WatiService
{
  
    protected $token;
    protected $api_endpoint;
    
    public function __construct()
    {
        $this->api_endpoint = 'https://live-mt-server.wati.io/103709';
        $this->token = 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJmOThjOTEzZC1kNDI1LTQ0NmYtYTNiMi01OWFmMmE0MmYwMWIiLCJ1bmlxdWVfbmFtZSI6ImluZGlhaG9yZWNhZXhwb0BnbWFpbC5jb20iLCJuYW1laWQiOiJpbmRpYWhvcmVjYWV4cG9AZ21haWwuY29tIiwiZW1haWwiOiJpbmRpYWhvcmVjYWV4cG9AZ21haWwuY29tIiwiYXV0aF90aW1lIjoiMTEvMjMvMjAyNCAwNzoxMTo1MyIsInRlbmFudF9pZCI6IjEwMzcwOSIsImRiX25hbWUiOiJtdC1wcm9kLVRlbmFudHMiLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL3JvbGUiOiJBRE1JTklTVFJBVE9SIiwiZXhwIjoyNTM0MDIzMDA4MDAsImlzcyI6IkNsYXJlX0FJIiwiYXVkIjoiQ2xhcmVfQUkifQ.fGQ79bQy-SoE-eARW7xmeHS8y8VhA79TYzKab7l0DDg';
    }
    
    public function sendTemplateMessages($to,$template_name, $params)
    {
        
        try {
               $post_data =[
                             "template_name"   => $template_name,
                             "broadcast_name"  => $template_name,
                             "receivers"       => [
                                                       [
                                                            "whatsappNumber" => "91".$to,
                                                            "customParams"   => $params
                                                       ]
                                                     ]
                         ];
           
                $curl = curl_init();
                
                curl_setopt_array($curl, array(
                  CURLOPT_URL => $this->api_endpoint .'/api/v1/sendTemplateMessages',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => json_encode($post_data),
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: '.$this->token
                  ),
                ));

 

                $response = curl_exec($curl);
               
                
                if (curl_errno($curl)) {
                   $res =  [
                       'status' => false,
                       'msg'    => 'Error:' . curl_error($curl),
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
                
                 
                curl_close($curl);
                
                return $res; 
        } catch (\Exception $e) { 
            return [
                        'status' => false,
                        'msg' => 'Fail: ' . $e->getMessage(),
                        'data' => []
                       ];
        }
    }
    
   
    
}
