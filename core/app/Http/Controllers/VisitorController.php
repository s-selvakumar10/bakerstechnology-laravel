<?php

namespace App\Http\Controllers;

use PDF;
use App\Helpers\Helper;
use App\Models\Visitor;
use App\Services\PdfService;
use Illuminate\Http\Request;
use App\Mail\VisitorRegistered;
use App\Services\QrCodeService;
use App\Services\WhatsApp\WatiService;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\VisitorRequest;
use App\Mail\VisitorRegNotificationToAdmin;
use Illuminate\Support\Facades\Log;

class VisitorController extends Controller
{
    public function store(VisitorRequest $request,WatiService $wati){
        
      if(isset($request->captcha_value) && Helper::captchaGet('visitor') == $request->captcha_value){
           Helper::captchaRemove('visitor');
       }else{
           
            return response()->json([
            'status'       => false, 
            'captcha_error' => 'Invalid captcha'
            ]);
       }
       
    //     $captcha = Helper::captcha($request->input('g-recaptcha-response'));
    //   if(!$captcha){
    //         return response()->json([
    //         'status'       => false, 
    //         'captcha_error' => 'Invalid captcha'
    //     ]);
    //   }
        $channel = Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/visitor-log.log')
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
        $data["industry"] = $request->industry ?? '';
        $data["purpose_of_attendance"] = $request->purpose_of_attendance ?? '';
        $data["products_of_interest"] = $request->products_of_interest ?? '';   
        $data['accept_promotional_updates'] = isset($$request->accept_promotional_updates) ? 1 : 0 ;
        
        $visitor = Visitor::create($data);

        $visitors = session()->get('visitors',[]);
        $visitor_count = count($visitors);
        $visitors[$visitor_count] = $visitor['id'];
        session()->put('visitors',$visitors);
        
        if($data["whatsapp_number"] != ''){
                    $whatsapp = $wati->sendTemplateMessages(
                                       $to = $data["whatsapp_number"],
                                       $template_name = 'btf_visitor_registration_v3',
                                       $params = [
                                                  [
                                                     "name" => "pdf",
                                                     "value" => "https://bakerstechnologyfair.com/".$visitor->id."/view-download"
                                                  ],
                                                  [
                                                     "name" => "name",
                                                     "value" => $visitor->name
                                                  ]
                                                ]
                                 );
        }

        Mail::to($request->email,VISITOR_REG_MAIL_NAME)->send(new VisitorRegistered($visitor));
        Mail::to(VISITOR_REG_TO_EMAIL,VISITOR_REG_MAIL_NAME_FOR_ADMIN)->cc(VISITOR_REG_TO_EMAIL_CC)->send(new VisitorRegNotificationToAdmin($visitor->id));

        return response()->json([
            'status'       => true,
            'redirect_url' => route('visitor-thank-you',$visitor_count), 
        ]);
        // return redirect()->route('visitor-thank-you',$visitor_count);
       
    }

    public function thankYouPage($visitor) {
        // dd( session()->all());
        $visitors = session()->get('visitors',[]);
        $visitor = Visitor::findOrFail($visitors[$visitor] ?? 0);
        
        $QrCodeService = new QrCodeService;
        $qr_image = $QrCodeService->generateVCardQrCode($visitor);

        $registration_id = Helper::generateRegistrationId($visitor['id']); 

        $social_media_share = Helper::socialMediaShare();

        $visitor_id = encrypt($visitor['id']);
        return view('pages.visitor-thank-you',compact(
            'visitor_id',
            'qr_image',
            'registration_id',
            'social_media_share'
        ));
    }


    public function downloadPDF($id){
        $data = Visitor::findOrFail(decrypt($id));
         
        $QrCodeService = new QrCodeService;
        $qr_image = $QrCodeService->generateVCardQrCode($data);
        $registration_id = Helper::generateRegistrationId($data['id']);

        $pdf_data = $data->toArray();
        $pdf_data['fullname'] = $data['name'];;
        $pdf_data['designation'] = $data['designation'];
        $pdf_data['company'] =$data['organization'];
        $pdf_data['registration_id'] = $registration_id;
        $pdf_data['qr'] = $qr_image;
        //$pdf_data['pdf_template_img'] = BASE_APP_PATH . '/assets/img/pdf/visitor-pass.jpg';
        $pdf_data['pdf_template_img'] = public_path('/assets/img/pdf/visitor-pass.jpg');
        $template_html = 'templates.pdf.visitor-pass';
        
        // $pdf_data['pdf_template_img'] = base64_encode(file_get_contents(url('/assets/img/pdf/visitor-pass.jpg')));
        
         $pdfService = new PdfService;
        return $pdfService->downloadPDF($template_html,$pdf_data);
    }
    
     public function viewPDF($id){
        $data = $this->pdfData($id);
        $template_html =  $data['template_html'];
        $pdf_data      =  $data['pdf_data'];
        $pdfService = new PdfService;
        return $pdfService->downloadPDF($template_html,$pdf_data); 
    }
    
    
     public function getPDF($id){
      
        $data = $this->pdfData($id);
        $template_html =  $data['template_html'];
        $pdf_data      =  $data['pdf_data'];
        $pdfService = new PdfService;
        return $pdfService->getPDF($template_html,$pdf_data);

     }
    
     public function pdfData($id){
        $data = Visitor::findOrFail($id);
         
        $QrCodeService = new QrCodeService;
        $qr_image = $QrCodeService->generateVCardQrCode($data);
        $registration_id = Helper::generateRegistrationId($data['id']);

        $pdf_data = $data->toArray();
        $pdf_data['fullname'] = $data['name'];;
        $pdf_data['designation'] = $data['designation'];
        $pdf_data['company'] =$data['organization'];
        $pdf_data['registration_id'] = $registration_id;
        $pdf_data['qr'] = $qr_image;
        //$pdf_data['pdf_template_img'] = BASE_APP_PATH . '/assets/img/pdf/visitor-pass.jpg';
        $pdf_data['pdf_template_img'] = public_path('/assets/img/pdf/visitor-pass.jpg');
        $template_html = 'templates.pdf.visitor-pass';
        
         return [
             'template_html' => $template_html,
             'pdf_data'   => $pdf_data
             ];
     } 
}
