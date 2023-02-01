<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\SubOrders;

class OrderAcceptedMessage extends Mailable
{
    use Queueable, SerializesModels;

    private $subOrder;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->subOrder = SubOrders::find($id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order Accepted Message')
                    ->view('email.order-accepted-message',[
                        'subOrder' => $this->subOrder,
                    ]);
    }
}
