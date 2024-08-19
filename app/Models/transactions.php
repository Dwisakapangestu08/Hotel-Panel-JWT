<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'hotel_orders_id',
        'status',
    ];

    public function hotel_orders()
    {
        return $this->belongsTo(hotel_orders::class, 'hotel_orders_id', 'id');
    }
}
