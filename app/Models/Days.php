<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    use HasFactory;

    protected $table = 'day';

    protected $fillable = ['id', 'days'];

    protected $hidden = ['id'];

    public $timestamps = false;

    public function excersice()
    {
        return $this->hasMany(Excercise::class, 'id');
    }
}
