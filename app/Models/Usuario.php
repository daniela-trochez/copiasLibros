<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ejemplars(){
        return $this->belongsToMany(Ejemplar::class);
    }
}
