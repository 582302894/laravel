<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Foundation\Auth\User as Authenticatable;

class ViewLog extends Model
{

    protected $table      = 'view_log';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = ['vnums'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }
}
