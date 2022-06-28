<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Player extends Model
{
    use HasFactory;


    //Relación uno a muchos
    public function games() {
        return $this->hasMany(Post::class);
    }

    //Relación uno a uno inversa
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
