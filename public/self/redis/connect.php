<?php

try {
	if(!class_exists('Redis')){
		echo 'not exist class Redis';
		exit();
	}
    $redis = new Redis();
    $flag=$redis->connect('127.0.0.1', 6379);
    echo '<pre>';
    var_dump($flag);
    var_dump($redis);
    echo '</pre>';
} catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';exit();
}
