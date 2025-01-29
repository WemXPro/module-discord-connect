<?php

namespace Modules\DiscordConnect\Listeners;

use App\Events\Order\OrderCancelled;
use Modules\DiscordConnect\Services\Discord;

class OrderCancelledListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderCancelled $event): void
    {
        (new Discord)->handleEvent('order_cancelled', $event->order);
    }
}
