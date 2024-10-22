<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

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
