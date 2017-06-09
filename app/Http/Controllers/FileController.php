<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{

    // 文件上传方法
    public function upload(Request $request)
    {
        $path=Storage::disk('public')->put('file.txt', 'Contents');
        echo '<pre>';
        var_dump(asset('storage/file.txt'));
        echo '</pre>';exit();
        // dd(asset('storage/avatars/S6bFUfcrdXDFePTAt08zJfnhunrBj5Gv60ogHfjv.png'));
        if ($request->isMethod('post')) {
            $path=Storage::disk('public')->put('file.txt', 'Contents');
            // $path = Storage::disk('public')->put('public/avatars', file_get_contents($request->file('picture')->getRealPath()));
            dd($path);
            $file = $request->file('picture');
            // 文件是否上传成功
            if ($file->isValid()) {
                dd($file);
                $file->store('photo');

            }

        }

        return view('basic.upload');
    }

    public function uploadimg(Request $request,$id=0)
    {

        if($id==0){
            if (!Auth::check()) {

                return "未登录";
            }
            $id=Auth::user()->uid;
    
        }
        $url='';
        if ($request->isMethod('post')) {
            $file = $request->file('picture');
            $ext=$file->extension();

            if(!in_array($ext, ['png','jpg','jpeg','bmp','gif'])){
                return redirect()->back()->with('error','请上传'.'png,'.'jpg,'.'jpeg,'.'bmp,'.'gif'.'格式的文件');
            }

            $name = $file->getClientOriginalName();
            $path = "picture/{$name}";
            

            $content=file_get_contents($file->getRealPath());
            $bool=Storage::disk('public')->put($path, $content);
           
            $url=asset('storage/'.$path);
           
            
        }

        return view('basic.uploadimg',['url'=>$url]);
    }
}
