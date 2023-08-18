<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: 'khoindps24802@fpt.edu.vn',
            subject: 'Dang Khoi test mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'sendmail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
