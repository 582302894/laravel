<?php

try {
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    echo '<pre>';
    var_dump($redis);
    echo '</pre>';
} catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';exit();
}
