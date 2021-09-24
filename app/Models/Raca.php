<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function caninos()
    {
        return $this->hasOne(Canino::class);
    }
}
