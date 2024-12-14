<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    
    protected $table = 'contributions';

    protected $fillable = ['name', 'content', 'goal', 'image'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}