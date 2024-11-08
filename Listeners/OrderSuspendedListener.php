<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Order\OrderSuspended;

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