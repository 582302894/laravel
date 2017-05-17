<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
class FileController extends Controller
{

    // 文件上传方法
    public function upload(Request $request)
    {

        if ($request->isMethod('post')) {

            $path = Storage::put(
                'picture/1.png',
                file_get_contents($request->file('picture')->getRealPath())
            );
            dd($path);
            $file = $request->file('picture');
            // 文件是否上传成功
            if ($file->isValid()) {
                dd($file);
                $$file->store('photo');

            }

        }

        return view('basic.upload');
    }

    public function uploadimg(Request $request)
    {

        // dd(Storage::disk('local')->put('file.txt', 'Contents'));
        dd(asset('storage/file.txt'));
        if ($request->isMethod('post')) {
            $file = $request->file('picture');
            $name = $file->getClientOriginalName();
            $path="picture/{$name}";
            $bool=Storage::put($path, file_get_contents($file->getRealPath()));

            $realPath=Storage::url($path);
            $request->session()->put('uploadImgPath', $realPath);
            dd(Session::get('uploadImgPath'));
        }

        return view('basic.uploadimg');
    }
}
