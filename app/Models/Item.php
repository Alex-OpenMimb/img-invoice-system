<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'items';

    protected $fillable = [
        'reference',
        'saler_id',
        'buyer_id',
        'date_item',
        'hour_item',
        'total',
    ];


    // Relaciones

    public function bayer()
    {
        return $this->belongsTo(Bayer::class);
    }

    public function saler()
    {
        return $this->belongsTo(Saler::class);
    }

    public function saled_product()
    {
        return $this->hasMany(SaledProduct::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }



}
