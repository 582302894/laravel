<?php
$fp=fopen('http://www.baidu.com', 'r');
$content=stream_get_contents($fp);
fclose($fp);

echo "\$fp=fopen('http://www.baidu.com', 'r');
\$content=stream_get_contents(\$fp);
fclose(\$fp);";
echo $content;