<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Define which attributes are mass assignable
    protected $fillable = ['title', 'content', 'author', 'image'];

    // If your image field is stored as a path to the file, you can cast it as a string
    protected $casts = [
        'image' => 'string',
    ];

    // If you need to create an accessor for image URL
    public function getImageUrlAttribute()
    {
        return asset('storage/articles/' . $this->image);
    }
}