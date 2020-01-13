<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    protected $fillable = [
        'name', 'email', 'password'
    ];
    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    // //     /**
    // //  * Add a mutator to ensure hashed passwords
    // //  */
    // // public function setPasswordAttribute($password)
    // // {
    // //     $this->attributes['password'] = Hash::make($password);
    // // }
}
