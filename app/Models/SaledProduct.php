<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaledProduct extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'sale_products';

    protected $fillable = [
        'product_id',
        'amount',
        'total',
        'item_id',
    ];



    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
