<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\User;
use App\UserAuth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function edit(Request $request, $args)
    {
        if (!Auth::check()) {
            return redirect()->route('user/login')->with('error', '请先登录');
        }

        $auth = Auth::user();
        $uid  = $auth->uid;
        $user = User::find($uid);

        $mailAuth = UserAuth::where([
            'uid'  => $uid,
            'type' => 2,
        ])->first();

        if ($user->year == 0 && $user->age != 0) {
            $user->year  = date('Y') - $user->age;
            $user->month = 1;
            $user->day   = 1;
        }

        if ($request->isMethod('post')) {
            $user->photo = $request->input('photo');
            $user->name  = $request->input('name');
            $user->age   = $request->input('age');

            $birth = explode('-', $request->input('birth'));

            $user->year  = isset($birth[0]) ? $birth[0] : '0';
            $user->month = isset($birth[1]) ? $birth[1] : '0';
            $user->day   = isset($birth[2]) ? $birth[2] : '0';

            $user->sex = $request->input('sex');
            $gap       = abs((date('Y') - $user->year) - $user->age);
            if ($gap > 1) {
                return redirect()->back()->withInput(Input::all())->with('error', "年龄与出生日期不符合,相差了{$gap}年");
            }

            $validator = \Illuminate\Support\Facades\Validator::make($request->input(), [
                'name' => 'required',
                'age'  => 'integer|required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput(Input::all());
            }

            if ($mailAuth == null) {
                $email   = $request->input('email');
                $code    = Session::get("mail_code_{$email}");
                $putcode = $request->input('code');
                if ($code == null) {
                    return redirect()->back()->withInput(Input::all())->with('error', '邮件验证码失效，请重新发送邮件');
                }
                if ($putcode != $code) {
                    return redirect()->back()->withInput(Input::all())->with('errorkeys', ['code' => '验证码错误']);
                }

                $oldAuth = UserAuth::where([
                    'uid'  => $user->id,
                    'type' => '1',
                ])->first();

                $userAuth           = new UserAuth();
                $userAuth->uid      = $user->id;
                $userAuth->account  = $email;
                $userAuth->password = $oldAuth->password;
                $userAuth->type     = 2;

                $userAuth->save();

            }

            if (!$user->save()) {
                return redirect()->back()->with('error', '修改失败');
            }
            return redirect('user/edit/self')->with('success', '修改成功');

        }
        return view('user.edit', ['user' => $user, 'auth' => $auth, 'mailAuth' => $mailAuth]);
    }

    public function mailcode($mail)
    {

        $uid  = Auth::user()->uid;
        $Auth = UserAuth::where([
            'account' => $mail,
            'type'    => 2,
        ])->first();
        if ($Auth != null && $Auth->uid != $uid) {
            return response()->json(['status' => 'error', 'message' => '邮件已经别人绑定了']);
        }

        return redirect('/mail/code/' . $mail);
    }
    public function delete()
    {

    }

    /**
     * 后台添加用户
     * @param  Request $request [description]
     * @param  [type]  $id      [description]
     * @return [type]           view('user.create') save-success->'user/lists':error->back()
     */
    public function create(Request $request, $id = null)
    {

        if ($id == null) {
            $user      = new User();
            $user->sex = 1;
        } else {
            $user = User::find($id);
        }

        if ($request->isMethod('POST')) {
            $user->name = $request->input('name');
            $user->age  = $request->input('age');
            $user->sex  = $request->input('sex');
            if (!empty($user->name) && $user->save()) {
                return redirect('user/lists')->with('success', '操作成功');
            } else {
                return redirect()->back()->with('error', '操作失败');
            }
        }

        return view('user.create', ['user' => $user]);
    }

    /**
     * 用户登录界面
     * @return [type] view('user.login');
     */
    public function login(Request $request)
    {

        // User::find(Auth::user()->all()->first()->uid)->name
        // \App\IpLog::record('user.login');

        if(Auth::check()){
            return redirect('index');
        }

        if ($request->isMethod('post')) {

            $account   = $request->input('account');
            $password  = $request->input('password');
            $validator = \Illuminate\Support\Facades\Validator::make($request->input(), [
                'account'  => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput(Input::all());
            }

            $type=1;
            if(preg_match('/@/',$account)){
                $type=2;
            }
            $auth = UserAuth::where([
                'account' => $account,
                'type'=>$type,
            ])->first();
            if ($auth === null) {
                return redirect()->back()->with('error', '用户不存在')->withInput(Input::all());
            }

            if (!Hash::check($request->input('password'), $auth->password)) {
                return redirect()->back()->with('error', '密码错误')->withInput(Input::all());
            }

            Auth::attempt(['account' => $account, 'password' => $password]);
            if (!Auth::check()) {
                return redirect()->back()->with('error', '登录失败')->withInput(Input::all());
            }

            return redirect()->route('index');
        }
        return view('user.login');
    }

    /**
     * [guard description]
     * /@/return [type] [description]
     */
    protected function guard()
    {
        return Auth::guard('guard-name');
    }

    /**
     * 用户注册
     * @return [type] view('user.register');
     */
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {

            if(preg_match('/@/',$request->input('account'))){
                return redirect()->back()->with('errorkeys',['account'=>'注册账户不能含有@符号'])->withInput(Input::all());
            }

            $validator = \Illuminate\Support\Facades\Validator::make($request->input(), [
                'account'               => 'required',
                'password'              => 'required|confirmed',
                'password_confirmation' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput(Input::all());
            }

            $account               = $request->account;
            $password              = $request->password;
            $password_confirmation = $request->password_confirmation;

            $auth = UserAuth::where([
                'account' => $account,
                'type'    => 1,
            ])->first();

            if ($auth != null) {
                return redirect()->back()->with('error', '该帐号名称已存在')->withInput(Input::all());
            }

            $user = User::create([
                'name' => $account,
            ]);

            UserAuth::create([
                'account'  => $account,
                'password' => Hash::make($password),
                'uid'      => $user->id,
                'type'     => 1,
            ]);

            return redirect()->route('user/login')->with('success', '注册成功')->withInput(Input::all());

        }

        return view('user.register');
    }

    /**
     * 重置密码
     * @return [type] [description]
     */
    public function resetpassword(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('user/login')->with('error', '请先登录');
        }
        $uid  = Auth::user()->uid;
        $auth = UserAuth::where([
            'uid'  => $uid,
            'type' => 2,
        ])->first();

        if ($auth == null) {
            return redirect()->route('user/edit/self')->with('error', '只有邮箱帐号可以修改密码');
        }

        if ($request->isMethod('post')) {

            $oldpassword           = $request->input('oldpassword');
            $password              = $request->input('password');
            $password_confirmation = $request->input('password_confirmation');
            if (!Hash::check($oldpassword, $auth->password)) {
                return redirect()->back()->with('errorkeys', ['oldpassword' => '与原密码不一致'])->withInput(Input::all());
            }
            $validator = \Illuminate\Support\Facades\Validator::make($request->input(), [
                'oldpassword'           => 'required',
                'password'              => 'required|confirmed',
                'password_confirmation' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput(Input::all());
            }

            if (Hash::check($password, $auth->password)) {
                return redirect()->back()->with('errorkeys', ['oldpassword' => '与原密码不一致']);
            }

            $auths = UserAuth::where(['uid' => $uid])->get();
            foreach ($auths as $auth) {
                $auth->password = Hash::make($password);
                $auth->save();
            }

            return redirect()->back()->with('success', '修改成功，Tips:同一用户的不同帐号密码相同');
        }

        return view('user.resetpassword');
    }


    public function forget(Request $request){

        
        if($request->isMethod('post')){
            $mail=$request->input("mail");
            $code=$request->input("code");
            $password=$request->input("password");
            $password_confirmation=$request->input("password_confirmation");

            if(!empty($mail)){
                $auth=UserAuth::where([
                    'account'=>$mail,
                    'type'=>2,
                    ])->first();
                if($auth==null){
                    return redirect()->back()->with('errorkeys',['mail'=>'该邮箱帐号不存在'])->withInput(Input::all());
                }


                $validator=\Illuminate\Support\Facades\Validator::make($request->input(),[
                    'mail'=>'required',
                    'password'=>'required|confirmed',
                    'password_confirmation'=>'required',
                    'code'=>'required',
                    ]);
                if($validator->fails()){
                    return redirect()->back()->withErrors($validator)->withInput(Input::all());
                }

                $mailcode=Session::get("mail_code_{$mail}");
                if($mailcode!=$code){
                    return redirect()->back()->with('errorkeys',['code'=>'验证码不正确'])->withInput(Input::all());   
                }


                UserAuth::changePassword($auth->uid,$password);

                return redirect()->back()->with('success','修改成功，Tips:同一用户的不同帐号密码相同');
            }
        }

        
        return view('user.forget');
    }


    public function logout(){
        Auth::logout();
        return redirect('/index');
    }
}
