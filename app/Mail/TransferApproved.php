<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TransferApproved extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(private $fullname, private $hash, private $amount, private $transfer_type, private $account_number, private $receipient_bank, private $description, private $confirmation_status)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Transaction Notification',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.transfer-approved',
            with: [
                'fullname' => $this->fullname,
                'hash' => $this->hash,
                'amount' => $this->amount / 100,
                'transfer_type' => $this->transfer_type,
                'account_number' => $this->account_number,
                'receipient_bank' => $this->receipient_bank,
                'description' => $this->description,
                'confirmation_status' => $this->confirmation_status
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
