<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserAuth extends Model implements AuthenticatableContract
{

    use Authenticatable, CanResetPassword;

    /**
     * type 1 账户 ，2 邮箱
     * @var string
     */
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

    public static function changePassword($uid, $password)
    {
        $auths=UserAuth::where(['uid'=>$uid])->get();


        foreach ($auths as $auth) {
            $auth->password=Hash::make($password);
            $auth->save();
        }
    }
}
