<?php
$url='http://www.baidu.com/';
$html = file_get_contents($url);

echo "\$url='http://www.baidu.com/';
\$html = file_get_contents(\$url);";

echo $html;
?>
