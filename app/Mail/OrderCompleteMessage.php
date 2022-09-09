<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Orders;

class OrderCompleteMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->order=Orders::findOrFail($id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order Complete Alert From WERBEFLÄCHEN')
                    ->view('email.order-complete-message',[
                        'order'=>$this->order,
                    ]);
    }
}
