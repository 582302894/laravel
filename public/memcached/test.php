<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="" method="post" id="">
缓存一个值<input type="text" name="key">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
error_reporting(E_ALL);
try {

    if (function_exists('memcache_connect')) {
        $mc = memcache_connect("127.0.0.1", 11211);
    } else {
        echo 'not exist';
        exit();
    }

} catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';
    exit();
}

$value = $mc->get('test_mc_key');
if (isset($_POST['key'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (empty($ip)) {
        echo '无法获取你的ip';
        exit();
    }
    if ($value == false) {
        $value = '';
    }
    $value .= $ip . "缓存了一个值" . $_POST['key'] . "<br/>";
    $mc->set('test_mc_key', $value, false, 3600);
    header("Location:http://{$_SERVER['HTTP_HOST']}/memcached/test.php");
    exit();
} else {
    echo $value;
}
