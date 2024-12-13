<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    // Define which attributes can be mass-assigned
    protected $fillable = [
        'user_id',
        'product_id',
        'price',
        'quantity',
        'total_price',
    ];

    // Optional: Define relationships (if any) with User and Product models
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
