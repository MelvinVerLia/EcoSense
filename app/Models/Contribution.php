<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    
    protected $table = 'contributions';

    
    protected $fillable = [
        'id',
        'name', 
        'goal',  
        'current_amount',  
        'current_progress',  
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}