<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $userEmail;
    public $userMobile;
    public $userState;
    public $userCity;
    public $userCountry;
    public $userMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($formData)
    {
        //dd($formData);
        $this->userName = $formData['name'];
        $this->userEmail = $formData['email'];
        $this->userMobile = $formData['mobile'];
        $this->userState = $formData['state'];
        $this->userCity = $formData['city'];
        $this->userCountry = $formData['country'];
        $this->userMessage = $formData['message'];
    }

     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->userEmail, $this->userName)
                    ->subject('New Contact Form Submission')
                    ->view('emails.contact-form');
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
