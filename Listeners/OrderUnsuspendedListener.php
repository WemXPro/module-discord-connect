<?php

namespace Modules\DiscordConnect\Listeners;

use App\Events\Order\OrderUnsuspended;
use Modules\DiscordConnect\Services\Discord;

class OrderUnsuspendedListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderUnsuspended $event): void
    {
        (new Discord)->handleEvent('order_unsuspended', $event->order);
    }
}
