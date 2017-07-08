<?php
// $data=array('a'=>'b');
// $data=http_build_query($data);

// $opts = array (
// 'http' => array (
// 'method' => 'POST',
// 'header'=> 'Content-type:application/x-www-form-urlencodedrn\r\n' .
// 'Content-Length:'.strlen($data).'\r\n',
// 'content' => $data
// )
// );
// $context=stream_context_create($opts);
// // echo '<pre>';
// // var_dump($context);
// // echo '</pre>';exit();
// $html=file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/self/http/post.php',false,$context);
// echo $html;

// ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');
// $url      = 'http://localhost/response.php';
// echo $flg = @file_get_contents($url);
// exit();

$data = array("name" => 'tim', "content" => 'test');
$data = http_build_query($data);
$opts = array(
    'http' => array(
        'method'  => "POST",
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n" .
        "Content-length:" . strlen($data) . "\r\n" .
        "Cookie: foo=bar\r\n" .
        "\r\n",
        'content' => $data,
    ),
);
$cxContext = stream_context_create($opts);
$sFile     = file_get_contents("http://'.$_SERVER['HTTP_HOST'].'/self/httl/post.php", false, $cxContext);

echo $sFile;
