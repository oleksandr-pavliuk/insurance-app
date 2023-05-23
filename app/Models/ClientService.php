<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Collection\Collection;

class ClientService extends Model
{
    use HasFactory;

    public static function getRecords() : Collection{
        return ClientService::has('clients', 'services')->get();
    }
}
