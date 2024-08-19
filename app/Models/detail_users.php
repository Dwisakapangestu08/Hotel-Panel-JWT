<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'alamat',
        'no_hp',
        'jenis_kelamin',
        'foto',
        'ktp',
        'no_rekening',
        'bank',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
