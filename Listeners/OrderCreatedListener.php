<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Order\OrderCreated;

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