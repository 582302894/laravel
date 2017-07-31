<?php

namespace App\Http\Controllers\Spider;

use App\Help\Net;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Spider\ToutController;
use App\SpiderLog;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SpiderController extends Controller
{

    public function getContent($url)
    {
        return Net::https($url);
    }

    public function test()
    {
        $url     = "http://www.toutiao.com/a6424602982528745729/";
        $content = $this->getContent($url);
        dd($content);
        echo $content;
    }

    public function video()
    {
        // dd(Session::get('spider_data'));

        // if (!Session::has('spider_video_time') || Session::get('spider_data') == null || Session::get('spider_video_time') < strtotime('-10 minute')) {
        if (Session::has('spider_video_time') || Session::get('spider_data') == null || Session::get('spider_video_time') < strtotime('-10 minute')) {
            $tout   = new ToutController();
            $videos = $tout->video();

            Session::put('spider_video_time', time());
            Session::put('spider_data', $videos);
            // foreach ($videos['data'] as $key => $video) {
            //     $log             = new SpiderLog();
            //     $log->content    = json_encode($video);
            //     $log->key        = md5($video['title']);
            //     $keys[]          = $log->key;
            //     $logs[$log->key] = $log;
            //     $log->type       = 1;
            // }

            // if(isset($keys)){
            //     $result=SpiderLog::whereIn('key',$keys)->lists('key')->all();
            // }

            // foreach ($logs as $key => $log) {
            //     if(!in_array($key,$result)){
            //         $log->save();
            //         echo 'save';
            //     }
            // }
            // dd($logs);
            // return view('spider.video',['videos'=>$videos['data']]);
            return view('spider.video', ['videos' => array(current($videos['data']))]);

        } else {
            $videos = Session::get('spider_data');
        }

    }

    public function picture()
    {

        if (Session::has('spider_picture_time') || Session::get('spider_picture_data') == null || Session::get('spider_picture_time') < strtotime('-10 minute')) {
            $tout     = new ToutController();
            $pictures = $tout->picture();

            Session::put('spider_picture_time', time());
            Session::put('spider_picture_data', $pictures);

            if (!isset($pictures['data'])) {
                dd($pictures);
            }

            $logs = [];
            $keys = [0];
            foreach ($pictures['data'] as $key => $picture) {
                try {
                    $size = getimagesize($picture['image_url']);    
                } catch (Exception $e) {
                    continue;
                }


                $picture['img'] = [
                    'width'  => $size[0],
                    'height' => $size[1],
                ];

                $log          = new SpiderLog();
                $log->content = json_encode($picture);
                $log->key     = md5($picture['title']);
                $keys[]       = $log->key;
                $log->type    = 2;
                $groupId      = $picture['group_id'];

                $listsStr     = $tout->picturelists($groupId);
                if($listsStr==false){
                    continue;
                }
                $log->other = $listsStr;

                $logs[$log->key] = $log;

                $imgs[$log->key]=[
                    $log->key,
                    $picture['title'],
                    $picture['image_url'],
                ];
                
                Net::saveImg($picture['image_url']);


            }


            if(isset($imgs)){
                $year=date('Y');
                $month=date('m');
                $day=date('d');

                $filename=date('His');

                $path = "spider/picture/{$year}/{$month}/{$day}/".$filename;
                
                $content=json_encode($imgs);
                $bool=Storage::disk('public')->put($path, $content);
            }
            $result = array();
            if (isset($keys)) {
                $result = SpiderLog::whereIn('key', $keys)->pluck('key')->all();
            }
            foreach ($logs as $key => $log) {
                if (!in_array($key, $result)) {
                    $log->save();
                    echo 'save';
                }
            }

            // dd($logs);

        } else {
            $videos = Session::get('spider_picture_data');
        }
    }

    public function picturelists($id)
    {
        $tout  = new ToutController();
        $lists = $tout->picturelists($id);
    }
}
