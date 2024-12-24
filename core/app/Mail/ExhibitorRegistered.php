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

class ExhibitorRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
 
    public $name;

    public function __construct($data)
    { 
        
        $this->name = $data['name'] ?? '';

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: EXHIBITOR_REG_MAIL_SUBJECT,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'templates.email.exhibitor-registered',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
