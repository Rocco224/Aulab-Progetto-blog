<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeList extends Model
{
    use HasFactory;

    protected $fillable = ['mal_id', 'name'];
}