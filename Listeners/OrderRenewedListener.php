<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Order\OrderRenewed;

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