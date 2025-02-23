<?php
 
namespace Modules\DiscordConnect\Listeners;
 
use Modules\DiscordConnect\Services\Discord;
use App\Events\Oauth\OauthConnected;	

class OauthConnectedListener
{
    /**
     * Handle the event.
     */
    public function handle(OauthConnected $event): void
    {
        try {
            $orders = $event->userOauth->user->orders()->where('status', 'active')->get();
            
            foreach($orders as $order) {
                (new Discord)->handleEvent('order_created', $order);
            }

        } catch (\Exception $e) {
            ErrorLog('DiscordConnect:OauthConnectedListener', $e->getMessage());
        }
    }
}