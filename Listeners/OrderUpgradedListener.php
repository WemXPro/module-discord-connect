<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Order\OrderUpgraded;

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