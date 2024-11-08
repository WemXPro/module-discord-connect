<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Oauth\OauthDisconnected;	

class OauthDisconnectedListener
{
    /**
     * Handle the event.
     */
    public function handle(OauthDisconnected $event): void
    {
        try {
            $orders = $event->userOauth->user->orders()->where('status', 'active')->get();

            foreach($orders as $order) {
                (new Discord)->handleEvent('order_suspended', $order);
            }

        } catch (\Exception $e) {
            ErrorLog('DiscordConnect:OauthDisconnected', $e->getMessage());
        }
    }
}