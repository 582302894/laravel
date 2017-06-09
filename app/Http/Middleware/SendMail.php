<?php

// namespace App\Http\Middleware;

// use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Auth;
// use App\UserAuth;

// class SendMail
// {
//     public function handle(Request $request, $mail)
//     {
//         $uid  = Auth::user()->uid;
//         $Auth = UserAuth::where([
//             'account' => $mail,
//             'type'    => 2,
//         ])->first();
//         if ($Auth != null && $Auth->uid != $uid) {
//             return response()->json(['status' => 'error', 'message' => '邮件已经别人绑定了']);
//         }

//         return next($request);


//     }
// }
