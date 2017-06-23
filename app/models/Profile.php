<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'dni','firstname', 'lastname',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function books(){
        return $this->belongsToMany(Book::class)->withTimestamps();
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
