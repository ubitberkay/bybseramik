<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boyut extends Model
{
    protected $fillable = ['title'];

    public function urun()
    {
        return $this->hasMany(Urun::class);
    }

    public function protiles_urun()
    {
        return $this->hasMany(ProtilesUrun::class);
    }
}
