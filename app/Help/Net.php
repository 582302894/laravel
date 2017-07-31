<?php

namespace App\Help;
use Illuminate\Support\Facades\Storage;

class Net
{

    /**
     * [https description]
     * @param  [type]  $url      [description]
     * @param  string  $type     [description]
     * @param  string  $data     [description]
     * @param  array   $headers  [description]
     * @param  boolean $next_url [description]
     * @return [type]            [description]
     */
    public static function https($url, $type = 'GET', $data = '', $headers=[],$next_url=false)
    {

        // $headers[]="直接添加的header字串 ";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        if($next_url==true){
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        }
        //
        if ($type == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1); //启用POST提交
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        }
        //
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        }
        if ($data != '') {
            if (gettype($data) == 'array') {
                $data = http_build_query($data);
            }
            look($data, 'data');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //设置POST提交的字符串
        }
        $data = curl_exec($ch);
        curl_close($ch);
        return ($data);
    }


    /**
     * save img in local
     * @param  [type] $url [description]
     * @return [type]      [description]
     */
    public static function saveImg($url){

        $key=md5($url);
        if(Storage::disk('public')->exists("img/{$key}")){
            return asset("storage/img/{$key}");   
        }

        $flag=Storage::disk('public')->put("img/{$key}", file_get_contents($url));
        return $url;


        // return $url;
    }
}
