<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'foto_url'
    ];

    public function categoria()
    {
      return $this->belongsTo('App\Models\Categoria');
    }
}
