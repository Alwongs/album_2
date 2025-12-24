<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'access',
        'user_id',
        'album_id'
    ];

    public function album() {
        return $this->belongsTo(Album::class);
    }    
}
