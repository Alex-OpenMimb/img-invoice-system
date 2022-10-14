<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bayer extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'bayers';

    protected $fillable = [
        'name',
        'nit',
     
    ];


// Relaciones
    public function item()
    {
        return $this->hasMany(Item::class);
    }

}
