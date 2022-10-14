<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'invoices';

    protected $fillable = [
        'number',
        'date_invoice',
        'hour_invoice',
        'before_iva',
        'iva',
        'total',
        'item_id',
     
    ];

    public function item()
    {
        return $this->hasOne(Item::class);
    }

}
