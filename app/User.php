<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{

    protected $table      = 'user';
    protected $primaryKey = 'id';
    public $timestamps    = true;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }
}
