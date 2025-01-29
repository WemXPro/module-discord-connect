<?php

namespace Modules\DiscordConnect\Listeners;

use App\Events\Order\OrderCreated;
use Modules\DiscordConnect\Services\Discord;

class OrderCreatedListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event): void
    {
        (new Discord)->handleEvent('order_created', $event->order);
    }
}
