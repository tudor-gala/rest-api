<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioTrack extends Model
{
    use HasFactory;

    public $fillable = ['artist', 'title', 'release_year'];
}
