<?php

namespace App\Http\Controllers\Spider;

use App\Help\Net;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ToutController extends Controller
{

    public function getContent($url)
    {
        return Net::https($url);
    }

    public function main($url)
    {

    }

    /**
     * 获取今日头条视频数据，返回（空）数组
     * @return [type] array()
     */
    public function video()
    {

        // $url     = "https://www.toutiao.com/ch/video/";
        $url="https://www.toutiao.com/api/pc/feed/?category=video&utm_source=toutiao&widen=1&max_behot_time=0&max_behot_time_tmp=0&tadrequire=true&as=A175D962173FAD3&cp=59275FEACD831E1";
        $json = Net::https($url);

        // Session::push('tou_t_video_content', $content);

        // if (!preg_match('/{\"(.*)};/', $content, $match)) {
        //     return array();
        // }
        // $match = $match[0];
        // $json  = preg_replace('/;$/', '', $match);

        $array = json_decode($json, true);
        if (!is_array($array)) {
            return array();
        }
        return $array;
    }

    /**
     * 获取今日头条图片数据，返回（空）数组
     * @return [type] array()
     */
    public function picture(){

        $url="http://www.toutiao.com/api/pc/feed/?category=%E7%BB%84%E5%9B%BE&utm_source=toutiao&max_behot_time=0&as=A1F5093229B342F&cp=59297384727FEE1";

        $json=Net::https($url);

         $array = json_decode($json, true);
        if (!is_array($array)) {
            return array();
        }
        return $array;

    }

    public function picturelists($id){
        $url="http://www.toutiao.com/group/{$id}";
        $return=Net::https($url,'GET','',[],true);
        preg_match('/{"(.*)};/', $return,$match);

        if(!isset($match[0])){
            return false;
        }

        $match[0]=preg_replace('/;$/', '', $match[0]);
        
        return $match[0];
        
    }
}
