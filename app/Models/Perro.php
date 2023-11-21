<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
      ];

      public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
