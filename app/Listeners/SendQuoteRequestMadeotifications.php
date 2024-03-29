<?php

namespace App\Listeners;

use App\Events\QuoteRequestMade;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequestNotification;
use App\Models\Quotation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendQuoteRequestMadeotifications
{
    /**
     * Create the event listener.
     */
    public function __construct(public Quotation $quotation)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(QuoteRequestMade $event): void
    {
        //
        Mail::to('webmaster@icehomedev.com')->send(new QuoteRequestNotification($this->quotation));
    }
}
