<?php
// ini_set('default_socket_timeout', 20);
// echo '<pre>';
// var_dump(ini_get('default_socket_timeout'));
// echo '</pre>';exit();
try {
    if (!class_exists('Redis')) {
        echo 'not exist class Redis';
        exit();
    }
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);


    $value = $redis->get('test-redis');
    if (empty($value)) {
        $value = $_SERVER['REMOTE_ADDR'] . 'test-redis<br>';
    } else {
        $value .= $_SERVER['REMOTE_ADDR'] . 'test-redis<br>';
    }
    $redis->set('test-redis', $value);

    echo $redis->get('test-redis');

} catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';exit();
}
