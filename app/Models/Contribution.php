<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    // The table associated with the model (optional if the table name follows convention)
    protected $table = 'contributions';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'id',
        'name',  // The name of the contributor
        'goal',  // The contribution goal
        'current_amount',  // The current amount contributed
        'current_progress',  // The progress percentage
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define any custom functions or logic related to the Contribution model
}