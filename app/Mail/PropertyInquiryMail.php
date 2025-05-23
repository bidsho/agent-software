<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PropertyInquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiry;
    public $recipientType;

    public function __construct(Inquiry $inquiry, $recipientType = 'visitor')
    {
        $this->inquiry = $inquiry;
        $this->recipientType = $recipientType;
    }

    public function build()
    {
        $subject = $this->recipientType === 'user'
            ? 'New Booking Request for Your Property'
            : 'Booking Request Confirmation';

        return $this->subject($subject)
                    ->view('emails.property-inquiry');
    }
}
