<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function test()
    {
        // dd(Config::get('mail'));
        $name = '学院君';
        $flag = Mail::send('emails.test', ['name' => $name], function ($message) {
            $to = '1125477664@qq.com';
            $message->to($to)->subject('测试邮件');
        });
        dd($flag);
        if ($flag) {
            echo '发送邮件成功，请查收！';
        } else {
            echo '发送邮件失败，请重试！';
        }

        dd(Config::get('mail'));
    }

    public function code($mail)
    {
        $code = rand(1, 8999) + 1000;
        
        $flag = Mail::send('emails.code', ['code' => $code], function ($message) use ($mail) {
            $to = $mail;
            $message->to($to)->subject('邮件验证码');
        });

        if ($flag=='') {
            Session::put("mail_code_{$mail}", $code);
            return response()->json(['status' => 'success', 'message' => '发送邮件成功，请查收！']);
        } else {
            return response()->json(['status' => 'error', 'message' => '发送邮件失败，请重试！']);
        }

    }
}
