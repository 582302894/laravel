<?php
namespace App\Http\Controllers;

use App\Help\Net;
use App\Http\Controllers;
use App\SpiderLog;
use App\User;

/**
 *
 */
class IndexController extends Controller
{

    public function index()
    {
        $logs = SpiderLog::where(['type' => 2])->orderBy('id','desc')->paginate(20);
        foreach ($logs as $key => $value) {
            $logs[$key]['content'] = json_decode($value['content'], true);
        }

        foreach ($logs as $key => $log) {
            $size              = getimagesize($log['content']['image_url']);
            $logs[$key]['img'] = [
                'width'  => $size[0],
                'height' => $size[1],
            ];
        }

        $pictures = [
            1 => [],
            2 => [],
            3 => [],
            4 => [],
        ];
        $sortHeight = [
            1 => 0,
            2 => 1,
            3 => 2,
            4 => 3,
        ];
        foreach ($logs as $key => $log) {
            
            asort($sortHeight);
           
            $num=array_search(current($sortHeight), $sortHeight);
            $pictures[$num][]=$log;
            $sortHeight[$num]+=(100/$log['img']['width'])*$log['img']['height'];
        }

        if($sortHeight[1]>$sortHeight[2]){
            $temp=$pictures[2];
            $pictures[2]=$pictures[1];
            $pictures[1]=$temp;            
        }

        return view('public.index', ['pictures' => $pictures,'logs'=>$logs]);
    }
    public function lists()
    {
        $users = User::paginate(10);

        return view('user.lists', [
            'users' => $users,
        ]);
    }

    public function video($id)
    {
        $log     = SpiderLog::find($id);
        $content = json_decode($log->content, true);

        // dd($content);
        $url     = "http://www.toutiao.com{$content['source_url']}";
        $content = Net::https($url, 'GET', '', [], true);
        // dd($url);
        // dd($content);

        return view('index.video', ['log' => $log, 'content' => $content, 'url' => $url]);

    }

    public function picture($id=0){

        $log=SpiderLog::find($id);
        $log->content=json_decode($log->content,true);
        $log->other=json_decode($log->other,true);
        // echo '<pre>';
        // var_dump($log);
        // echo '</pre>';
        // dd($log);
        return view('index.picture',['log'=>$log]);
    }
}
