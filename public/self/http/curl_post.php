<?php
$url  = 'http://' . $_SERVER['HTTP_HOST'] . '/self/http/post.php';
$data = ['a' => 1, 'b' => 2];
// echo '<pre>';
// var_dump($url);
// echo '</pre>';exit();
// $ch   = curl_init();
// $data = http_build_query($data);
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);

// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// $out = curl_exec($ch);
// curl_close($ch);
exit();
$out = https($url, 'POST', $data);
// $out=https('http://www.baidu.com');
echo '<pre>';
var_dump($out);
echo '</pre>';

function https($url, $type = 'GET', $data = '', $headers = [], $next_url = false)
{

    // $headers[]="直接添加的header字串 ";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // CURLOPT_RETURNTRANSFER参数的作用是把CRUL获取的内容赋值到变量
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    if ($next_url == true) {
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //设置POST提交的字符串
    }
    try {

        $data = curl_exec($ch);
        curl_close($ch);
    } catch (Exception $e) {
        curl_close($ch);

    }
    return ($data);
}
