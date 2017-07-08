<?php

$fp=fsockopen($_SERVER['HTTP_HOST'],80,$errno,$errStr,10);
$data=['text'=>'cc'];
$data=http_build_query($data);
$request="POST http://".$_SERVER['HTTP_HOST']."/self/http/post.php HTTP/1.1\r\n";
$request.="Host:".$_SERVER['HTTP_HOST']."\r\n";
$request.="Content-Type:application/x-www-form-urlencoded\r\n";
$request.="Content-Length:".strlen($data)."\r\n\r\n";
$request.=$data;
fwrite($fp, $request);

$out="";
while (!feof($fp)) {
	
	$out.=fgets($fp,1024);
}
fclose($fp);
echo $out;