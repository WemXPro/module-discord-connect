<?php

namespace Modules\DiscordConnect\Entities;

use Illuminate\Database\Eloquent\Model;

class PackageEvent extends Model
{
    protected $table = 'module_dc_packages_events';

    protected $fillable = [
        'packages',
        'all_packages',
        'name',
        'event',
        'action',
        'roles',
    ];

    protected $casts = [
        'roles' => 'array',
        'packages' => 'array',
        'all_packages' => 'boolean',
    ];
}

