<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicantinfo extends Model
{
    //
    public function Applicationtype()
    {
        return $this->belongsTo('App\Applicationtype');

    }
    public function Department()
    {
        return $this->hasMany('App\Department');
    }
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
