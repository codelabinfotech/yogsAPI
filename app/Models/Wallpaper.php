<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallpaper extends Model
{
    use HasFactory;

    protected $table = 'wallpaper';

    protected $fillable = ['id', 'title', 'description', 'image'];

    public $timestamps = false;
}
