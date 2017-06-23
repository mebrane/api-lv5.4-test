<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

}