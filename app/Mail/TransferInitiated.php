<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TransferInitiated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(private $fullname, private $hash, private $amount, private $transfer_type, private $account_number, private $receipient_name, private $receipient_bank, private $description, private $status)
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
            view: 'mail.transfer-initiated',
            with: [
                'fullname' => $this->fullname,
                'amount' => $this->amount / 100,
                'hash' => $this->hash,
                'transfer_type' => $this->transfer_type,
                'account_number' => $this->account_number,
                'receipient_name' => $this->receipient_name,
                'receipient_bank' => $this->receipient_bank,
                'description' => $this->description,
                'status' => $this->status,
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
