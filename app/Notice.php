<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Notice extends Model
{
    protected $guard='admin';
    protected $fillable = [
             'tittle',
             'notice',
];
}
