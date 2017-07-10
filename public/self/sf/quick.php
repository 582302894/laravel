<?php

$arr = [7, 4, 5, 1, 2, 9, 0, 3, 4, 8, 6];

function quick($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }

    $value = $arr[0];

    $left = $right = [];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $value) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(quick($left), [$value], quick($right));

}

$arr = quick($arr);

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

function quick($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }

    $value = $arr[0];

    $left = $right = [];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $value) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(quick($left), [$value], quick($right));

}

$arr = quick($arr);
</body>
</html>
