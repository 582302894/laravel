<?php
$arr = [7, 4, 5, 1, 2, 9, 0, 3, 4, 8, 6];

echo implode(',', $arr) . "<br/>";
for ($i = 1; $i < count($arr); $i++) {
    for ($j = 0; $j < (count($arr) - $i); $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp        = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j]     = $temp;
        }

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
$arr=[7,4,5,1,2,9,0,3,4,8,6];


for ($i=1; $i < count($arr); $i++) {
	for ($j=0; $j < (count($arr)-$i); $j++) {
		if($arr[$j]>$arr[$j+1]){
			$temp=$arr[$j+1];
			$arr[$j+1]=$arr[$j];
			$arr[$j]=$temp;
		}

	}
}

</pre>
</body>
</html>
