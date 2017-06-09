<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Foundation\Auth\User as Authenticatable;

class SpiderLog extends Model
{

    protected $table      = 'spider_log';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = ['content'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }


}
