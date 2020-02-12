<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function getJWTIdentifier()
    // {
    //     return $this->getKey();
    // }
 
    // public function getJWTCustomClaims()
    // {
    //     return [];
    // }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
