<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

}
