<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canino extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "sexo"
    ];

    public function raca()
    {
        return $this->belongsTo(Raca::class);
    }
}
