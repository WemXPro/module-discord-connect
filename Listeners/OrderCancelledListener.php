<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Order\OrderCancelled;

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