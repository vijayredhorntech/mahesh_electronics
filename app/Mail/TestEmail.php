<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: config('mail.from.address'),
            subject: 'Contact Form Submission',
        );
    }

    public function content(): Content
    {
        try {
            return new Content(
                view: 'emails.test',
                with: [
                    'formData' => $this->formData
                ]
            );
        } catch (\Exception $e) {
            Log::error('Error creating email content: ' . $e->getMessage());
            throw $e;
        }
    }

    public function attachments(): array
    {
        return [];
    }
}
