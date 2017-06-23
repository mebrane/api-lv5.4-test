<?php

namespace App;

use App\models\Comment;
use App\models\Profile;
use App\models\Rol;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name',
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne(Profile::class,'id');
    }
    public function rol(){
        $this->belongsTo(Rol::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
