<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }

    public function teachers()
    {
        return $this->hasMany('App\Teacher');

    }
    public function courses()
    {
        return $this->hasMany('App\Course');

    }

    public function registereds()
    {
        return $this->hasMany('App\Registered');

    }
    public function Backlog()
    {
        return $this->hasMany('App\Backlog');

    }

}
