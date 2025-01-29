<?php

namespace Modules\DiscordConnect\Listeners;

use App\Events\Order\OrderRenewed;
use Modules\DiscordConnect\Services\Discord;

class OrderRenewedListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderRenewed $event): void
    {
        (new Discord)->handleEvent('order_renewed', $event->order);
    }
}
