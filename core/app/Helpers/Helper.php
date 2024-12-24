<?php

namespace App\Helpers;

use Nette\Utils\Image;
use Nette\Utils\ImageType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\IpUtils;
use Illuminate\Support\Facades\Http;
use App\Models\CertifiedWorkshop;

class Helper
{

    public static function captchaSet($name){
        $data = [
            "n1" => rand(0, 9), 
            "n2" => rand(0, 9)
         ];
        $session = new Session();
        $captcha_value = $data['n1'] + $data['n2'];
        $session->set($name.'_captcha_value',$captcha_value);
        return  $data;
    }
    
    public static function captchaGet($name){
        $session = new Session();
        $captcha_value =  $session->get($name.'_captcha_value');
        return $captcha_value;
    }
    
    public static function captchaRemove($name){
        $session = new Session();
        $session->remove($name.'_captcha_value');
        return true;
    }
    
    
    public static function captcha($recaptcha){
          
         if (is_null($recaptcha)) {
            return false;
         }
        
        
         $url = "https://www.google.com/recaptcha/api/siteverify";
        
         $params = [
          'secret' => config('services.recaptcha.secret'),
          'response' => $recaptcha,
          'remoteip' => IpUtils::anonymize(request()->ip())
         ];
          $response = Http::get($url, $params);
        
        
         $result =$response->json();
        
         if ($response->successful() && $result['success'] == true) {
         
          return true;
          
         }else{
             return false;
         }
    }
    
    public static function generateRegistrationId($id)
    {
        return 'BTF2025'.$id;
    }
    
        public static function generateWorkshopRegistrationId($id)
    {
        return 'BTF2025WSR'.$id;
    }
    
    public static function workshopRegistrationLeft()
    {
        // $registered_count =  CertifiedWorkshop::whereNotIn('is_pass_sent',[0])->count();
        // $registrations_left  = WORKSHOP_REG_LIMIT - $registered_count;
        // return $registrations_left;
        
         $day_1 = CertifiedWorkshop::where(function($q){$q->whereJsonContains('days',['1'])->orWhere('all_days','1');})->whereNotIn('is_pass_sent',[0])->count();
         $day_2 = CertifiedWorkshop::where(function($q){$q->whereJsonContains('days',['2'])->orWhere('all_days','1');})->whereNotIn('is_pass_sent',[0])->count();
         $day_3 = CertifiedWorkshop::where(function($q){$q->whereJsonContains('days',['3'])->orWhere('all_days','1');})->whereNotIn('is_pass_sent',[0])->count();
         
         return [
             'day_1' =>  WORKSHOP_REG_LIMIT - $day_1,
             'day_2' =>  WORKSHOP_REG_LIMIT - $day_2,
             'day_3' =>  WORKSHOP_REG_LIMIT - $day_3
             ];
        
    }
    
    public static function socialMediaShare(){

 $whatsapp_content = "I'm Excited to attend Bakers Technology Fair 2025, Bengaluru! 🌐 Join me to evaluate the best suppliers to the Bakery, Confectionery, Sweet & Snack Industry from January 28-30 at Palace Ground. Explore 300+ global and domestic products & solutions to fuel business growth. Let's connect and discover the future of sourcing!
     
Register at: https://bakerstechnologyfair.com/visitor-registration?v=".rand()."\n";
         
        
            $calendar = [
                  
                    'text' => 'Bakers Technology Fair 2025, Bengaluru',
                    'from_date' => '2025-01-28 10:00:00',
                    'to_date' => '2025-01-30 18:00:00',
                    'details' => 'Bakers Technology Fair 2025',
                    'location' => 'Bengaluru'
                ];
                
                
                $userAgent = $_SERVER['HTTP_USER_AGENT'];
                $mobileKeywords = array('Mobile', 'Android', 'iPhone', 'iPad', 'Windows Phone','iPod');
                
                $linkedin = 'https://www.linkedin.com/feed/?shareActive=true&text='.urlencode($whatsapp_content);
                foreach ($mobileKeywords as $keyword) {
                    if (stripos($userAgent, $keyword) !== false) {
                        $linkedin = 'https://www.linkedin.com/cws/share?text='.urlencode($whatsapp_content);
                        break;
                    }
                }
            
               
                
            $url = array(
                 'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=https://bakerstechnologyfair.com/visitor-registration',
                //  'whatsapp' => 'https://wa.me/?text='.urlencode($whatsapp_content),
                 'whatsapp' => 'whatsapp://send?text='.urlencode($whatsapp_content),
                 'linkedin' => $linkedin,
                 'googleCalendar' => 'https://calendar.google.com/calendar/u/0/r/eventedit?action=TEMPLATE&text='.urlencode(($calendar["text"])).'&dates='.date_format(date_create($calendar["from_date"]), "Ymd\THis").'/'.date_format(date_create($calendar["to_date"]), "Ymd\THis").'&details='.urlencode($calendar["details"]).'&location='.urlencode($calendar["location"]),
                 'outlookCalender' => 'data:text/calendar;charset=utf-8,BEGIN:VCALENDAR%0AVERSION:2.0%0APRODID:-//Your Company//Your App//EN%0ACALSCALE:GREGORIAN%0ABEGIN:VEVENT%0ADTSTART:'.date_format(date_create($calendar["from_date"]), "Ymd\THis").'%0ADTEND:'.date_format(date_create($calendar["to_date"]), "Ymd\THis").'%0ASUMMARY:'.($calendar["text"]).'%0ALOCATION:'.($calendar["location"]).'%0ADESCRIPTION:'.($calendar["details"]).'%0ASTATUS:CONFIRMED%0ASEQUENCE:0%0ABEGIN:VALARM%0ATRIGGER:-PT15M%0AACTION:DISPLAY%0ADESCRIPTION:Reminder%0AEND:VALARM%0AEND:VEVENT%0AEND:VCALENDAR'
            );    
            return $url;
    }


    public static function session()
    {
        $session = new Session();
        return $session;
    }

    public static function sessionId()
    {
        $session = new Session();
        if (!$session->has('session_id')) {
            $session->set('session_id', Str::random(70));
        }

        $session_id = $session->get('session_id');
        return $session_id;
    }

    public function slugify(Request $request)
    {
        return Str::slug($request->name ?? '');
    }

    public static function uploadFile($folder_path, $file)
    {
        try {
            if (is_array($file)) {
                $_file_name = [];
                foreach ($file as $key => $_file) {
                    if (!File::exists($folder_path)) {
                        File::makeDirectory($folder_path, 0777, true);
                    }

                    $file_name = date('YmdHis') . '-' . rand(0000000, 9999999) . '-' . $key . '.' . $_file->getClientOriginalExtension();
                    if ($_file->move($folder_path, $file_name)) {
                        $_file_name[] = $file_name;
                    }
                }
                return $_file_name;
            } else {
                if (!File::exists($folder_path)) {
                    File::makeDirectory($folder_path, 0777, true);
                }

                $file_name = date('YmdHis') . '-' . rand(0000000, 9999999) . '.' . $file->getClientOriginalExtension();
                if (!$file->move($folder_path, $file_name)) {
                    return '0';
                } else {
                    return $file_name;
                }
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public static function uploadImg($folder_path, $file , $transform = null,$file_name= null )
    {
        
        try {
             
            $quality = $transform['quality'] ?? 85;
         
            if (is_array($file)) {
                $_file_name = [];
                foreach ($file as $key => $_file) {
                    if (!File::exists($folder_path)) {
                        File::makeDirectory($folder_path, 0777, true);
                    }

                    if( !$file_name ){
                        $file_name =   date('YmdHis') . '-' . rand(0000000, 9999999) .  '.webp';
                    }
                   

                    $image = Image::fromFile($_file);

                    if($transform){
                        if( !empty($transform['resize'])){
                            $image->resize(...$transform['resize']); 
                        } 
                       
                    } 
                    $image->save( $folder_path.'/'.$file_name, $quality);
                    $_file_name[] =  $file_name;
                }
                return $_file_name;
            } else {
  

                if (!File::exists($folder_path)) {
                    File::makeDirectory($folder_path, 0777, true);
                }
 
                $image = Image::fromFile($file);
                
                if($transform){ 
                    if( !empty($transform['resize'])){
                        $image->resize(...$transform['resize']); 
                    }
                } 
 
                if( !$file_name ){
                    $file_name =   date('YmdHis') . '-' . rand(0000000, 9999999) .  '.webp';
                }
                $image->save( $folder_path.'/'.$file_name, $quality);
                return $file_name;
                // return  self::imageToWebp($folder_path, $file);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public static function imageToWebp($folder_path, $file)
    {
        $file_name = date('YmdHis') . '-' . rand(0000000, 9999999) .  '.webp';

        $source = $file;
        $quality = 85;
        $removeOld = false;
        $dir = pathinfo($source, PATHINFO_DIRNAME);
        $name = pathinfo($source, PATHINFO_FILENAME);
        $destination = $folder_path . '/' . $file_name;
        $info = getimagesize($source);
        $isAlpha = false;
        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source);
        elseif ($isAlpha = $info['mime'] == 'image/gif') {
            $image = imagecreatefromgif($source);
        } elseif ($isAlpha = $info['mime'] == 'image/png') {
            $image = imagecreatefrompng($source);
        } else {
            return self::uploadFile($folder_path, $file);
            // return $source;
        }

        if ($isAlpha) {
            imagepalettetotruecolor($image);
            imagealphablending($image, true);
            imagesavealpha($image, true);
        }
        imagewebp($image, $destination, $quality);

        if ($removeOld)
            unlink($source);
        return $file_name;
    }
    public static function deleteFile($file)
    {
        if (File::isFile($file) && File::exists($file)) {
            unlink($file);
        }
        return true;
    }

    public static function deleteImg($img)
    {
        $image_info = @getimagesize($img);
        if ($image_info !== false) {
            unlink($img);
        }
        return true;
    }

    public static function encrypt_id($id)
    {
        $ciphering = "AES-128-CTR";
        $options = 0;
        // $encryption_iv = '1234567891011121';
        $encryption_iv = '3423586346854564';
        $encryption_key = 'admin@123';
        $encryption = openssl_encrypt(
            $id,
            $ciphering,
            $encryption_key,
            $options,
            $encryption_iv
        );
        $encryption = str_replace('/', '#', $encryption);
        return $encryption;
    }

    public static function decrypt_id($encrypted)
    {
        $encrypted = str_replace('#', '/', $encrypted);
        $ciphering = "AES-128-CTR";
        $options = 0;
        $decryption_iv = '3423586346854564';
        $decryption_key = 'admin@123';
        $decryption = openssl_decrypt(
            $encrypted,
            $ciphering,
            $decryption_key,
            $options,
            $decryption_iv
        );
        return $decryption;
    }

    public static function summerNoteContentStore($content,$dir)
    {
        $path = "images/summernote/$dir/";
        $summernote_content = $content;
        preg_match_all('/<img[^>]+src="([^">]+)"/',   $content, $matches);

        foreach ($matches[1] ?? [] as $key => $_base64_string) {

            if (preg_match('/^data:image\/\w+;base64,/', $_base64_string)) {
                $base64_string = preg_replace('/^data:image\/\w+;base64,/', '', $_base64_string);
                $image_data = base64_decode($base64_string);
                $ext = explode(';', $_base64_string);
                $ext = explode('/', $ext[0])[1];

                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }
                $file_name = $path . date('YmdHis') . '-' . rand(0000000, 9999999) . '-' . $key . '.' . $ext;
                file_put_contents($file_name, $image_data);
                $summernote_content = str_replace($_base64_string, asset($file_name), $summernote_content);
            }
        }

        return $summernote_content;
    }

    public static function summerNoteContentUpdate($old_content, $new_content,$dir)
    {
        $path = "images/summernote/$dir/";
        $summernote_content = $old_content;
        preg_match_all('/<img[^>]+src="([^">]+)"/',   $old_content, $matches);
        foreach ($matches[1] ?? [] as $key => $old_img) {
            if (!Str::contains($new_content, $old_img)) {
                if (File::exists($path . Str::after($old_img, $path))) { 

                    $urlComponents = parse_url($old_img);
                    $baseUrl = $urlComponents['scheme'] . '://' . $urlComponents['host']; 
                    if(url('/') == $baseUrl){
                        unlink($path . Str::after($old_img, $path));
                    } 
                    
                }
            }
        }
        return self::summerNoteContentStore($new_content,$dir);
    }

    public static function summerNoteContentClone($content,$dir)
    {
        $path = "images/summernote/$dir/";  

        $summernote_content = $content;
        preg_match_all('/<img[^>]+src="([^">]+)"/',   $content, $matches);

        foreach ($matches[1] ?? [] as $key => $old_img) {
              
                $ext = pathinfo($old_img, PATHINFO_EXTENSION);
                $image_data = file_get_contents($old_img);
                $new_name  = $path . date('YmdHis') . '-' . rand(0000000, 9999999) . '-' . $key . '.' . $ext;;
                file_put_contents($new_name, $image_data); 

                $summernote_content = Str::replace($old_img, $new_name, $summernote_content);

        }
          
        return self::summerNoteContentStore($summernote_content,$dir);
    }
}
