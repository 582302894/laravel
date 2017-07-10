<?php
$arr = [7, 4, 5, 1, 2, 9, 0, 3, 4, 8, 6];

for ($i = 0; $i < count($arr); $i++) {
    $minkey = $i;
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$minkey] > $arr[$j]) {
            $minkey = $j;
        }
    }
    if ($minkey != $i) {
        $temp         = $arr[$minkey];
        $arr[$minkey] = $arr[$i];
        $arr[$i]      = $temp;
    }

}

echo implode(',', $arr) . "<br/>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
</head>
<body>
<pre>
$arr = [7, 4, 5, 1, 2, 9, 0, 3, 4, 8, 6];

for ($i = 0; $i < count($arr); $i++) {
    $minkey = $i;
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$minkey] > $arr[$j]) {
            $minkey = $j;
        }
    }
    if ($minkey != $i) {
        $temp         = $arr[$minkey];
        $arr[$minkey] = $arr[$i];
        $arr[$i]      = $temp;
    }

}
<img src="./1.png" />
</body>
</html>
