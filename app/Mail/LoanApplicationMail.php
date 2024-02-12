<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LoanApplicationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $url;

    /**
     * Create a new message instance.
     */
    public function __construct($details, $url)
    {
        $this->details = $details;
        $this->url = $url;
    }

    public function build()
    {
        // Check if id_card path exists and is not null
        // dd($this->url);
        if (isset($this->url) && $this->url !== null) {
            $idCardPath = $this->url;
            // Attach the ID card file from storage
            return $this->view('emails.loan-application')
                ->subject($this->details['subject'])
                ->with([
                    'idCardPath' => $idCardPath,
                ])
                ->from(config('mail.from.address'), config('mail.from.name'))
                ->attachFromStorage($idCardPath);
        } else {
            // If id_card path is not set or null, return the email without attachment
            return $this->view('emails.loan-application')
                ->subject($this->details['subject'])
                ->from(config('mail.from.address'), config('mail.from.name'));
        }
    }
    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Loan Application Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

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
