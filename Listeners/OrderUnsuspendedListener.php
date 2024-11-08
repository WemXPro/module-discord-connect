<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Order\OrderUnsuspended;

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