<?php

class tree
{
    public $value;
    public $left  = null;
    public $right = null;
}

$a = new tree(['a']);
$b = new tree(['b']);
$c = new tree(['c']);
$d = new tree(['d']);
$e = new tree(['e']);
$f = new tree(['f']);
$g = new tree(['g']);
$h = new tree(['h']);

$a->left  = $b;
$a->right = $c;

$b->left  = $d;
$b->right = $e;

$e->right = $h;

$c->left = $f;

$f->right = $h;

function draw($root)
{
 
}
draw($a);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
</head>
<body>
<img src="./1.bmp" />
<pre>
</body>
</html>
