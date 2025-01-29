<?php

namespace Modules\DiscordConnect\Listeners;

use App\Events\Order\OrderSuspended;
use Modules\DiscordConnect\Services\Discord;

class OrderSuspendedListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderSuspended $event): void
    {
        (new Discord)->handleEvent('order_suspended', $event->order);
    }
}
