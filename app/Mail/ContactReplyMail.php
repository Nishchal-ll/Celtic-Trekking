<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactReplyMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public ContactMessage $contactMessage;
    public string $emailBody;

    public function __construct(ContactMessage $contactMessage, string $emailBody)
    {
        $this->contactMessage = $contactMessage;
        $this->emailBody = $emailBody;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reply from Celtic Trekking',
            replyTo: [$this->contactMessage->email_address],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-reply',
            with: [
                'contactMessage' => $this->contactMessage,
                'emailBody' => $this->emailBody,
            ],
        );
    }
}
