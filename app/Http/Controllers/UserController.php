<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit()
    {

    }
    public function delete()
    {

    }
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

}
