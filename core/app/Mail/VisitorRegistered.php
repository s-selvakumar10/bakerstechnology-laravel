<?php

namespace App\Mail;

use App\Helpers\Helper;
use App\Services\PdfService;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Services\QrCodeService;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class VisitorRegistered extends Mailable 
{
    use Queueable, SerializesModels;

    public $data;
    public $qr;
    public $fullname;
    public $company;
    public $registration_id;
    public $qr_image;
    public $pdf;

    public function __construct($data,$qr_image='')
    { 
        $registration_id = Helper::generateRegistrationId($data['id']); 
        $this->fullname = $data['name'] ?? '';
        $this->company = $data['organization'] ?? '';       
        $this->registration_id = $registration_id; 

        if($qr_image == ''){
          $QrCodeService = new QrCodeService;
          $this->qr_image = $QrCodeService->generateVCardQrCode($data);
        }else{
          $this->qr_image = $qr_image;
        }
             
        $pdfService = new PdfService;
        $pdf_data = $data->toArray();
        $pdf_data['fullname'] = $data['name'];;
        $pdf_data['designation'] = $data['designation'];
        $pdf_data['company'] =$data['organization'];
        $pdf_data['registration_id'] = $registration_id;
        $pdf_data['qr'] = $this->qr_image;
        $pdf_data['pdf_template_img'] = public_path('assets/img/pdf/visitor-pass.jpg');
        //  $pdf_data['pdf_template_img'] = base64_encode(file_get_contents(url('/assets/img/pdf/visitor-pass.jpg')));
        $template_html = 'templates.pdf.visitor-pass';
        
        $this->pdf = $pdfService->generateMailPDF($template_html,$pdf_data);

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: VISITOR_REG_MAIL_SUBJECT,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'templates.email.visitor-registered'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [      
              Attachment::fromData(fn () => $this->pdf, 'download.pdf')
        ->withMime('application/pdf'),];
    }
}
