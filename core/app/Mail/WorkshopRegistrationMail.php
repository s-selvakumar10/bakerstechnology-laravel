<?php

namespace App\Mail;

use chillerlan\QRCode\QRCode;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Services\QrCodeService;
use chillerlan\QRCode\QROptions;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Str;

class WorkshopRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
 
    public $data;
    public $attachment;

    public function __construct($data)
    { 
        $this->attachment = $data['attachment'];
        unset($data['attachment']);
        $this->data = $data;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: WORKSHOP_REG_MAIL_SUBJECT_FOR_ADMIN,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'templates.email.admin.workshop-registration',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if($this->attachment){
            $ext = Str::after($this->attachment, '.');
            return [      
            Attachment::fromPath(public_path('certified-workshop/attachment/'.$this->attachment))->as('name.'.$ext)
            ->withMime('application/'.$ext),
        ];
        }else{
          return [];  
        }
        
        
    }
}
