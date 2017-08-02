<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use App\IpLog;
use Illuminate\Http\Request;

/**
 *
 */
class IpController extends Controller
{
    public function jsiplogs()
    {
    }
    public function iplogs()
    {

        if (!isset($_POST['REMOTE_ADDR'])) {
            return 'error data';
        }
        $_REMOTE_ADDR  = $_POST['REMOTE_ADDR'];
        $_REQUEST_URI  = $_POST['REQUEST_URI'];
        $_HTTP_REFERER = $_POST['HTTP_REFERER'];

        $self = array_unique(IpLog::where(['type' => 3])->get()->pluck(['ip'])->all());
        if (in_array($_POST['REMOTE_ADDR'], $self)) {
            return 'not recode self';
        }

        $IpLog = new IpLog();

        $IpLog->title   = '用户访问日志';
        $IpLog->content = '';

        $IpLog->ip      = $_POST['REMOTE_ADDR'];
        $IpLog->url     = $_POST['REQUEST_URI'];
        $IpLog->referer = isset($_POST['HTTP_REFERER']) ? $_POST['HTTP_REFERER'] : '';

        $IpLog->type = 2;

        $IpLog->save();
        return 'recode iplogs';
    }

    public function isMe(Request $request)
    {

        if ($request->isMethod('POST')) {
            $password = $request->input('password');
            if ($password == '582302894sun') {
                $log          = new IpLog();
                $log->title   = 'self';
                $log->content = '';

                $log->ip      = $_SERVER['REMOTE_ADDR'];
                $log->url     = $_SERVER['REQUEST_URI'];
                $log->referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
                $log->type    = 3;
                $log->save();

                return redirect()->back()->with('success', 'password right');
            } else {
                return redirect()->back()->with('error', 'password wrong');
            }
        }

        return view('iplog.isme');
    }
}
