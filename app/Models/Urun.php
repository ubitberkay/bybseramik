<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Urun extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'types',
        'color',
        'boyuts'
    ];
    protected $casts = [
        'boyuts' => 'array', // Cast 'sizes' as an array to store multiple size IDs
        'types' => 'array'
    ];
    public function boyut()
    {
        return $this->hasMany(Boyut::class, 'id', 'sizes');
    }

    public function type()
    {
        return $this->hasMany(Type::class, 'id', 'sizes');
    }
}
