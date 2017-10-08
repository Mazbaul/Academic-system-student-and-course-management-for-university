<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicantinfo extends Model
{
    //
    public function Applicationtype()
    {
        return $this->hasMany('App\Applicationtype');

    }
    public function Department()
    {
        return $this->hasMany('App\Department');
    }
    public function User()
    {
        return $this->hasMany('App\User');
    }

}
