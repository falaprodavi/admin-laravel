<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marca;

class Produto extends Model
{
    use HasFactory;

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
