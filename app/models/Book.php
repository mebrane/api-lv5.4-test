<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'title','description',
    ];

    public function authors(){
        return $this->belongsToMany(Profile::class)->withTimestamps();
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
