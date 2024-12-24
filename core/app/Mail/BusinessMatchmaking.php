<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\BusinessMatchmaking as BusinessMatchmakingModel;

class BusinessMatchmaking extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;

    public function __construct($id)
    {

        $this->data = BusinessMatchmakingModel::select(
            DB::raw("CONCAT_WS(' ', name_prefix, first_name, last_name) as name"),
            // "name_prefix",
            // "first_name",
            // "last_name",
            "email",
            "mobile",
            "company_name",
            "products_of_interest",
            "description",
            "date",
            "department",
            "designation",
            "company_address",
            "city",
            "state",
            "country",
            "zip_code",
            "company_website",
        )->where('id',$id)->first()->toArray();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: BUSINESS_MATCHMAKING_MAIL_SUBJECT_FOR_ADMIN,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'templates.email.admin.business-matchmaking',
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
