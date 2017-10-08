<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicationtype extends Model
{
    //

    public function Applicationinfo()
    {
        return $this->belongsTo('App\Applicationinfo');
    }
    

}
