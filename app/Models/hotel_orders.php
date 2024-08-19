<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel_orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'hotels_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function hotels()
    {
        return $this->belongsTo(hotels::class, 'hotels_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(transactions::class, 'hotel_orders_id', 'id');
    }
}
