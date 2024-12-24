<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExhibitorRegNotificationToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;

    public function __construct($data)
    { 

        $this->data = $data->only([
            'name', 
            'organization as organisation', 
            'designation', 
            'mobile', 
            'whatsapp_number', 
            'email', 
            'company_address', 
            'city', 
            'state', 
            'zip_code', 
            'country', 
            'stand_space', 
            'sponsorship', 
            'advertisement', 
            'others'
        ]);

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: EXHIBITOR_REG_MAIL_SUBJECT_FOR_ADMIN,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'templates.email.admin.exhibitor-registered',
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
