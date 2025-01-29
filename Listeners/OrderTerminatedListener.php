<?php

namespace Modules\DiscordConnect\Listeners;

use App\Events\Order\OrderTerminated;
use Modules\DiscordConnect\Services\Discord;

class OrderTerminatedListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderTerminated $event): void
    {
        (new Discord)->handleEvent('order_terminated', $event->order);
    }
}
