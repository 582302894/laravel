<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function lists()
    {
        return view('admin.lists');
    }

    public function picturelogs($time = null)
    {

        if ($time == null) {
            $basicdir = 'spider/picture';
        } else {
            $basicdir = 'spider/picture/' . str_replace('-', '/', $time);
        }

        $directories = Storage::disk('public')->directories($basicdir);

        $files = [];
        if (empty($directories)) {
            $allFiles = Storage::disk('public')->allFiles($basicdir);
            foreach ($allFiles as $key => $value) {
                $files[] = str_replace($basicdir . '/', '', $value);
            }

            rsort($files);

        }
        $dirs = [];
        foreach ($directories as $key => $value) {
            $dirs[] = str_replace($basicdir . '/', '', $value);
        }

        return view('admin.picturelogs', ['dirs' => $dirs, 'basicdir' => $basicdir, 'time' => $time, 'files' => $files]);
    }

    public function picturelog($dir){
    	$dir=str_replace('-','/',$dir);
    	$content=Storage::disk('public')->get($dir);
    	$dates=json_decode($content);
    	return view('admin.picturelog',['dates'=>$dates]);
    }
}
