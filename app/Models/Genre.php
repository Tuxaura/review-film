<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get the films for the genre.
     */
    // public function films()
    // {
    //     return $this->belongsToMany(Film::class);
    // }
    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
