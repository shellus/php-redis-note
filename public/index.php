<?php
use Symfony\Component\HttpFoundation\Response as BaseResponse;
header("Content-Type:text/html;charset=UTF-8");

require_once '../vendor/autoload.php';

define('APP_PATH', __DIR__.'/..');

$container = new \Orno\Di\Container;

require_once '../app/providers.php';

function app($class_name)
{
    global $container;
    return $container -> get($class_name);
}

/**
 * @param $view
 * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
 */
function view($view){
    $response = BinaryFileResponse::create(APP_PATH . "/app/view/{$view}.html");
    return $response;
}

$router = new Router();

require_once '../app/routes.php';

$router -> run(function($response){
    if($response instanceof BaseResponse){
        $request = app('request');
        $response->prepare($request);
        $response -> send();
    }else{
        throw new Exception('不能识别的响应');
    }
});
