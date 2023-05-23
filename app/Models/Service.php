<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;
    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(
            Service::class,
            'client_services',
            'service_id',
            'client_id'
        );
    }
}
