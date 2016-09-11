<?php
/**
 * Created by PhpStorm.
 * User: shellus
 * Date: 2016-09-11
 * Time: 20:01
 */


$container -> add('request', function() {
    return Request::createFromGlobals();
});
$container -> add('redis', function() {
    return new Redis();
});
$container -> add('note', function() {
    $redis = app('redis');
    $redis -> connect('127.0.0.1', 6379);
    return new Note($redis);
});