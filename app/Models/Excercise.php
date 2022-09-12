<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Days;

class Excercise extends Model
{
    use HasFactory;

    protected $table = 'excercise';

    protected $fillable = ['id', 'day_id', 'title', 'description', 'image'];

    protected $hidden = ['id', 'day_id'];

    public $timestamps = false;

    public function day()
    {
        return $this->belongsTo(Days::class, 'day_id');
    }
}
