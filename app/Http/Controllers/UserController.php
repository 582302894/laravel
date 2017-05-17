<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\User;
use App\UserAuth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

    public function edit($args)
    {
        if (!Auth::check()) {
            return redirect()->route('user/login')->with('error', '请先登录');
        }

        $uid  = Auth::user()->uid;
        $user = User::find($uid);

        return view('user.edit', ['user' => $user]);
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
        \App\IpLog::record('user.login');

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

            $auth = UserAuth::where([
                'account' => $request->input('account'),
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
     * @return [type] [description]
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

}
