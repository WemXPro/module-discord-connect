<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Order\OrderTerminated;

class OrderTerminatedListener
{
    /**
     * Handle the event.
     */
    public function handle(OrderTerminated $event): void
    {
        (new Discord)->handleEvent('order_terminated', $event->order);
    }
}