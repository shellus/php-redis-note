<?php
/**
 * Created by PhpStorm.
 * User: shellus
 * Date: 2016-09-10
 * Time: 21:59
 */

function dump($var){
    var_dump($var);
}
function dd($var = null){
    dump($var);
    die();
}