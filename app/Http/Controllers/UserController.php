<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\User;
use App\UserAuth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

    public function edit()
    {

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


        if ($request->isMethod('post')) {

           
            
            

            $validator=\Illuminate\Support\Facades\Validator::make($request->input(),[
                    'account'=>'required',
                    'password'=>'required',
                ],Config::get('required'),Config::get('form'));
            
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput(Input::all());
            }


            $auth = UserAuth::where([
                'account' => $request->input('account'),
            ])->first();
            if ($auth === null) {
                return redirect()->back()->with('error', '用户不存在')->withInput(Input::all());
            }

            if (Hash::check($request->input('password'), $auth->password)) {
                return redirect()->back()->with('success', '登录成功')->withInput(Input::all());
            } else {
                return redirect()->back()->with('error', '密码错误')->withInput(Input::all());                
            }
            dd($request->input('password'));
        }
        return view('user.login');
    }

    /**
     * 用户注册
     * @return [type] view('user.register');
     */
    public function register(Request $request)
    {

        if ($request->isMethod('post')) {


            $validator=\Illuminate\Support\Facades\Validator::make($request->input(),[
                'account'=>'required',
                'password'=>'required',
                'password_confirmation'=>'required|comfirmed'
                ],[],Config::get('form'));
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput(Input::all());
            }

            $account=$request->account;
            $password=$request->password;
            $password_confirmation=$request->password_confirmation;
            $name=$request->name;
            $age=$request->age;
            $sex=$request->sex;

            $auth=UserAuth::where([
                'account'=>$account,
                'type'=>1,
                ])->first();


            if($auth!=null){
                return redirect()->back()->with('error','该帐号名称已存在')->withInput(Input::all());
            }

            dd($request);

        }

        return view('user.register');
    }

}
