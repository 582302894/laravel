<?php
namespace App\Http\Controllers;

use App\Help\Net;
use App\Http\Controllers;
use App\SpiderLog;
use App\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use App\ViewLog;
/**
 *
 */
class IndexController extends Controller
{

    public function index()
    {
        $logs = SpiderLog::where(['type' => 2])->orderBy('id', 'desc')->paginate(20);
        foreach ($logs as $key => $value) {
            $logs[$key]['content'] = json_decode($value['content'], true);

            if (!isset($logs[$key]['content']['img'])) {
                $size        = getimagesize($logs[$key]['content']['image_url']);
                $temp        = $logs[$key]['content'];
                $temp['img'] = [
                    'width'  => $size[0],
                    'height' => $size[1],
                ];
                $logs[$key]['content'] = $temp;

                $log          = $logs[$key];
                $log->content = json_encode($log->content);
                $log->save();

                $logs[$key]['img'] = $temp['img'];
            } else {
                $logs[$key]['img'] = $logs[$key]['content']['img'];
            }

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

            $temp = $log->content;

            $temp['image_url'] = Net::saveImg($temp['image_url']);
            $log->content      = $temp;

            asort($sortHeight);

            $num              = array_search(current($sortHeight), $sortHeight);
            $pictures[$num][] = $log;
            $sortHeight[$num] += (100 / $log['img']['width']) * $log['img']['height'];
        }

        if ($sortHeight[1] > $sortHeight[2]) {
            $temp        = $pictures[2];
            $pictures[2] = $pictures[1];
            $pictures[1] = $temp;
        }
        // return view('public.index', ['pictures' => $pictures, 'logs' => $logs]);
        //
        //

        if (!Cookie::has('comment_name')) {
            $name1 = ['路人', '小二', '客官', '掌柜'];
            $name2 = ['甲', '乙', '丙', '丁'];
            $cookie=Cookie::forever('comment_name', $name1[array_rand($name1)] . $name2[array_rand($name2)]);
            $response=new Response();
            $response->withCookie($cookie);
            return $response;
            // Response::make()->withCookie($cookie);
            
        }

        return view('public.index', [
            'one'          => [$pictures[1], $pictures[2]],
            'two'          => [$pictures[3], $pictures[4]],
            'logs'         => $logs,
            'comment_name' => Cookie::get('comment_name'),
        ]);
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

    public function picture($id = 0)
    {


        $log          = SpiderLog::find($id);
        $log->content = json_decode($log->content, true);
        $log->other   = json_decode($log->other, true);


        $vnum=ViewLog::find($id);
        if($vnum==null){
            $vnum=new ViewLog();
            $vnum->id=$id;
            $vnum->vnums=1;
            $vnum->save();
        }else{
            $vnum->vnums++;
            $vnum->save();
        }

        return view('index.picture', ['log' => $log]);
    }
}
