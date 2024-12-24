<?php

namespace App\Services;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions; 

class QrCodeService
{
    /**
     * Generate a QR code as a data URI.
     *
     * @param string $text
     * @param int $size
     * @param int $margin
     * @return string
     */
    public function generateVCardQrCode($data)
    {
        $vcard = "BEGIN:VCARD\r\n";
        $fullname = $data['name'] ?? '';
        $fullname = preg_replace('/\s+/', ' ',trim($fullname));  
        $mobile =  $data['mobile'] ?? '';
        $designation = $data['designation'] ?? '';
        $company =   $data['organization'] ?? '';
        $workcontact = '';
        $homecontact = '';
        $email =  $data['email'] ?? '';
        $website = '';
        $address = '';  
         
        if (!empty($fullname)) {
           
            // $name_arr = (explode(" ", $fullname));
            // $_prefix = $name_arr[3] ?? '';
            // $_first_name = $name_arr[0] ?? '';
            // $_middle_name =$name_arr[1] ?? '';
            // $_last_name = $name_arr[2] ?? '';
            // $_suffix = $name_arr[4] ?? '';
            // $_fullname =$_prefix.';'.$_middle_name.';'.$_last_name.';'. $_first_name.';'. $_suffix;
            // $vcard .= "N:$_fullname;\r\n";
         
            // $fullname = implode(";", explode(" ", $fullname)); 
            $vcard .= "N:$fullname;\r\n";
            $vcard .= "FN:$fullname\r\n";
           
        }
        if (!empty($mobile)) {
            $vcard .= "TEL;TYPE=mobile:$mobile\r\n";
        }
        
        if (!empty($designation)) {
            $vcard .= "TITLE:$designation\r\n";
        }
        
        if (!empty($company)) {
            $vcard .= "ORG:$company\r\n";
        }
        
        if (!empty($workcontact)) {
            $vcard .= "TEL;TYPE=work,VOICE:$workcontact\r\n";
        }
        
        if (!empty($homecontact)) {
            $vcard .= "TEL;TYPE=home,VOICE:$homecontact\r\n";
        }
         
        if (!empty($email)) {
            $vcard .= "EMAIL:$email\r\n";
        }
        
        if (!empty($website)) {
            $vcard .= "URL:$website\r\n";
        }
        
        if (!empty($address)) {
            $vcard .= "ADR;TYPE=home,PREF:;;$address\r\n";
        }
        
        $vcard .= "VERSION:3.0\r\n";
        $vcard .= "END:VCARD";
        
        //QR Image
        $option = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel'   => QRCode::ECC_L,
            'scale'      => 5,  
        ]);
        $qr_image = (new QRCode($option ))->render($vcard);
         
         
         return  $qr_image ;
         
    }


    
}
