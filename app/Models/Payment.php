<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'id',
        'name',
        'price',
        'quantity',
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}