<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    use HasFactory;

    public function paquetes()
    {
        return $this->hasMany(Paquete::class)->count();
    }
}
