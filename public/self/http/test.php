
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>
// error_reporting(E_ALL);
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');
// // $url='http://localhost/response.php';
// // $url='http://localhost/test.html';
// $url='http://127.0.0.1/response.php';
// $flg=file_get_contents($url);
// echo $flg;

// Create a stream
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
        "Cookie: foo=bar\r\n",
    ),
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('http://www.baidu.com', false, $context);
echo $file;
exit();

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
$sFile     = file_get_contents("http://www.qq582302894.com/sunhaobo", false, $cxContext);

echo $sFile;

</pre>
</body>
</html> -->

<?php


// POST http://myself.cn/self/http/post.php HTTP/1.1
// Host: myself.cn
// Connection: keep-alive
// Content-Length: 8
// Cache-Control: max-age=0
// Origin: http://myself.cn
// Upgrade-Insecure-Requests: 1
// User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36
// Content-Type: application/x-www-form-urlencoded
// Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
// Referer: http://myself.cn/self/http/post.php
// Accept-Encoding: gzip, deflate
// Accept-Language: zh-CN,zh;q=0.8
// Cookie: BD_UPN=12314753

// text=123


$data=array('text'=>'asdasd');
$data=http_build_query($data);
$opts=[
   'http'=>[
        'method'=>'POST',
        'header'=>
        "Host:".$_SERVER['HTTP_HOST']."\r\n".
        "Content-Type:application/x-www-form-urlencoded\r\n".
        "Content-Length:".strlen($data)."\r\n",
        "content"=>$data,
        'timeout'=>20,
   ]
];
$context=stream_context_create($opts);
$out=file_get_contents("http://".$_SERVER['HTTP_HOST']."/self/http/post.php",false,$context);
echo '<pre>';
var_dump($out);
echo '</pre>';exit();



// echo '<pre>';
// var_dump(1);
// echo '</pre>';exit();
// error_reporting(E_ALL);
ini_set('user_agent', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');
// // $url='http://localhost/response.php';
// // $url='http://localhost/test.html';
// $url='http://127.0.0.1/response.php';
// $flg=file_get_contents($url);
// echo $flg;

// Create a stream
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
        "Cookie: foo=bar\r\n",
    ),
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('http://www.baidu.com', false, $context);
echo $file;
exit();

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
$sFile     = file_get_contents("http://www.qq582302894.com/sunhaobo", false, $cxContext);

echo $sFile;
?>

