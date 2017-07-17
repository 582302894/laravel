<?php

$data = array("name" => 'tim', "content" => 'test');
$data = http_build_query($data);

$opts = array(
    'http' => array(
        'method'  => "POST",
        'header'  =>
        "Content-type: application/x-www-form-urlencoded\r\n" .
        "Content-Length:" . strlen($data) . "\r\n",
        'content' => $data,
    ),
);
$cxContext = stream_context_create($opts);
$sFile     = file_get_contents("http://" . $_SERVER['HTTP_HOST'] . "/self/http/post.php", false, $cxContext);
echo $sFile;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>
$data = array("name" => 'tim', "content" => 'test');
$data = http_build_query($data);

$opts = array(
    'http' => array(
        'method'  => "POST",
        'header'  =>
        "Content-type: application/x-www-form-urlencoded\r\n" .
        "Content-Length:" . strlen($data) . "\r\n",
        'content' => $data,
    ),
);
$cxContext = stream_context_create($opts);
$sFile     = file_get_contents("http://".$_SERVER['HTTP_HOST']."/self/http/post.php", false, $cxContext);
</body>
</html>
