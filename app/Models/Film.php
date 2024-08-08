<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'genre_id'];

    /**
     * Get the genre that owns the film.
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
