<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'map_code',
        'address',
        'phone_number',
        'mail'
    ];
}
