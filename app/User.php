<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\model;

class User extends  Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function registered()
    {
        return $this->belongsTo('App\Registered');
    }
    public function Applicationinfo()
    {
        return $this->hasMany('App\Applicationinfo');
    }
    protected $fillable = [
        'name', 'email','studentid', 'password','academicssn','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
