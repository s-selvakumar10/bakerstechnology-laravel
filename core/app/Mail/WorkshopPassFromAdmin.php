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

class WorkshopPassFromAdmin extends Mailable 
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
        $registration_id = Helper::generateWorkshopRegistrationId($data['id']); 
        $this->fullname = $data['name'] ?? '';
        $this->company = $data['company_name'] ?? '';       
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
        $pdf_data['company'] =$data['company_name'];
        $pdf_data['registration_id'] = $registration_id;
        $pdf_data['qr'] = $this->qr_image;
        $pdf_data['pdf_template_img'] = public_path('assets/img/pdf/workshop-pass.jpg');
        $template_html = 'templates.pdf.workshop-pass';
        
        $this->pdf = $pdfService->generateMailPDF($template_html,$pdf_data);

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Badge & QR Code for Bakery & Café Mastery Workshop 2025',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'templates.email.workshop-pass'
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
