<?php

class tree
{
    public $value;
    public $left  = null;
    public $right = null;
}

$a        = new tree();
$a->value = 'a';
$b        = new tree();
$b->value = 'b';
$c        = new tree();
$c->value = 'c';
$d        = new tree();
$d->value = 'd';
$e        = new tree();
$e->value = 'e';
$f        = new tree();
$f->value = 'f';
$g        = new tree();
$g->value = 'g';
$h        = new tree();
$h->value = 'h';

$a->left  = $b;
$a->right = $c;

$b->left  = $d;
$b->right = $e;

$e->right = $h;

$c->left = $f;

$f->right = $h;

function draw($root)
{
    if ($root->left != null) {
        echo $root->value . "->left:" . $root->left->value . "&nbsp;";
    }
    if ($root->right != null) {
        echo $root->value . "->right:" . $root->right->value;
    }
    if ($root->right != null || $root->left != null) {
        echo "<br/>";
    }
    if ($root->left != null) {
        draw($root->left);
    }
    if ($root->right != null) {
        draw($root->right);
    }
}
draw($a);

$deep     = 0;
$deeepNum = [];
function deep($root)
{
    global $deep;
    global $deeepNum;
    $deep++;
    if (!isset($deeepNum[$deep])) {
        $deeepNum[$deep] = 1;
    } else {
        $deeepNum[$deep]++;
    }
    if (!empty($root->left)) {
        deep($root->left);
    }
    if (!empty($root->right)) {

        deep($root->right);
    }
    $deep--;

}
deep($a);
echo '<pre>';
var_dump($deeepNum);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
</head>
<body>
<pre>
function deep($root)
{
    global $deep;
    global $deeepNum;
    $deep++;
    if (!isset($deeepNum[$deep])) {
        $deeepNum[$deep] = 1;
    } else {
        $deeepNum[$deep]++;
    }
    if (!empty($root->left)) {
        deep($root->left);
    }
    if (!empty($root->right)) {

        deep($root->right);
    }
    $deep--;

}
<img src="./1.bmp" />

</body>
</html>
