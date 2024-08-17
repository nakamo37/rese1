<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function scopeAreaSeach($query, $area)
    {
        if (!empty($area)) {
            $query->where('area', $area);
        }
    }
    public function scopeGenreSeach($query, $genre)
    {
        if (!empty($genre)) {
            $query->where('genre', $genre);
        }
    }

    public function scopeNameSeach($query, $name)
    {
        if (!empty($name)) {
            $query->where('name', 'like', '%' . $name . '%');
        }
    }
}