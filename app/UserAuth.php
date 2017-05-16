<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserAuth extends Model implements AuthenticatableContract
{


    use Authenticatable, CanResetPassword;
    protected $table      = 'user_auth';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = ['uid', 'account', 'password', 'type'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }
}
