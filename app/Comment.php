<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Model
{

    protected $table      = 'comment';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = ['ip', 'content', 'name', 'type'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }

    // /**
    //  * 操作记录
    //  * @param  [type] $title   [description]
    //  * @param  [type] $content [description]
    //  * @param  [type] $type [description]
    //  * @return [type]          [description]
    //  */
    // public static function record($title = '', $content = '', $type = 1)
    // {
    //     $log          = new IpLog();
    //     $log->title   = $title;
    //     $log->content = $content;

    //     $log->ip      = $_SERVER['REMOTE_ADDR'];
    //     $log->url     = $_SERVER['REQUEST_URI'];
    //     $log->referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

    //     $log->type = $type;

    //     $log->save();
    // }
}
