<?php
/**
 * Created by PhpStorm.
 * User: shellus-out
 * Date: 2016/9/9
 * Time: 18:18
 */

$redis = new Redis();
$redis -> connect('127.0.0.1', 6379);
$note = new Note($redis);
if($_GET['action'] === 'add'){
    return $note -> add($_GET['title']);
}
