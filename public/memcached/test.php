<?php
error_reporting(E_ALL);
try {

    if (function_exists('memcache_connect')) {
        $memcache_obj = memcache_connect("127.0.0.1", 11211);
        echo '<pre>';
        var_dump($memcache_obj);
        echo '</pre>';exit();
    } else {
        echo 'not exist';
    }

} catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';exit();
}
