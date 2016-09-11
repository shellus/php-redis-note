<?php
/**
 * Created by PhpStorm.
 * User: shellus
 * Date: 2016-09-11
 * Time: 18:54
 */
/** @var Router $router */
$router -> get('/', function(){
    $response = BinaryFileResponse::create(APP_PATH . "/app/view/note.html");
    return $response;
});
$router -> resource('note', App\Controller\NoteController::class);
