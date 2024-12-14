<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'author', 'image'];

    protected $casts = [
        'image' => 'string',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/articles/' . $this->image);
    }
}