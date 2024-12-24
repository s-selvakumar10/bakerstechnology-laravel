<?php

namespace App\Mail;

use App\Models\Visitor;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class VisitorRegNotificationToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;

    public function __construct($id)
    { 

        $this->data = Visitor::select(
            'name', 
            'organization', 
            'designation', 
            'mobile', 
            'whatsapp_number', 
            'email', 
            'company_address', 
            'city', 
            'state', 
            'zip_code', 
            'country', 
            'industry as Representing Industry', 
            'purpose_of_attendance as Purpose of Attending the Expo', 
            'products_of_interest as Products you are Interested in Sourcing', 
            'expo_referral_source as How Did You Know About This Expo',
        )->where('id',$id)->first()->toArray();
      

    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: VISITOR_REG_MAIL_SUBJECT_FOR_ADMIN,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'templates.email.admin.visitor-registered',
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
