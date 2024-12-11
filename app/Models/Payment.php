<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // The table associated with the model (optional if the table name follows convention)
    protected $table = 'payments';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'id',
        'name',
        'price',
        'quantity',
        'total_price',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define any custom functions or logic related to the Payment model
}