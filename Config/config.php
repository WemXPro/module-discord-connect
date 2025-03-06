<?php

return [

    'name' => 'DiscordConnect',
    'icon' => 'https://imgur.png',
    'author' => 'WemX',
    'version' => '1.0.0',
    'wemx_version' => '1.0.0',

    'elements' => [

        'admin_menu' =>
        [
            [
                'name' => 'DiscordConnect',
                'icon' => '<i class="fas fa-book"></i>',
                'type' => 'dropdown',
                'items' => [
                    [
                        'name' => 'Settings',
                        'href' => '/admin/discord-connect/',
                    ],
                    [
                        'name' => 'Package Events',
                        'href' => '/admin/discord-connect/packages',
                    ],
                ],
            ],
            // ... add more menu items
        ],

    ],

];
