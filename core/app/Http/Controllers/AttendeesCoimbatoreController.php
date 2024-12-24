<?php

namespace App\Http\Controllers;

use PDF;
use App\Helpers\Helper;
use App\Models\AttendeesCoimbatore;
use App\Services\PdfService;
use Illuminate\Http\Request;
use App\Mail\VisitorRegistered;
use App\Services\QrCodeService;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\VisitorRequest;
use App\Mail\VisitorRegNotificationToAdmin;

class AttendeesCoimbatoreController extends Controller
{
   
    public function downloadPDF($id){
        $data = AttendeesCoimbatore::findOrFail($id);
         
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
        $pdf_data['pdf_template_img'] = public_path('/assets/img/pdf/cmt.jpg');
        $template_html = 'templates.pdf.visitor-pass';
        
        // $pdf_data['pdf_template_img'] = base64_encode(file_get_contents(url('/assets/img/pdf/visitor-pass.jpg')));
        
         $pdfService = new PdfService;
        return $pdfService->downloadPDF($template_html,$pdf_data);
    }
}
