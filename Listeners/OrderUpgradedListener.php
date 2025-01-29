<?php

namespace Modules\DiscordConnect\Listeners;

use App\Events\Order\OrderUpgraded;
use Modules\DiscordConnect\Services\Discord;

class OrderUpgradedListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderUpgraded $event): void
    {
        (new Discord)->handleEvent('order_upgraded', $event->order);
    }
}
