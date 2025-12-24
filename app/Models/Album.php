<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'user_id'];

    public function photos() {
        return $this->hasMany(Photo::class);
    }    
}
