<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://www.baidu.com');
$out=curl_exec($ch);
curl_close($ch);
echo '<pre>';
var_dump($out);
echo '</pre>';exit();
</body>
</html>

<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.baidu.com');
$out = curl_exec($ch);
curl_close($ch);
echo '<pre>';
var_dump($out);
echo '</pre>';exit();