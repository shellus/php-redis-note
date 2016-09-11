<?php
/**
 * Created by PhpStorm.
 * User: shellus
 * Date: 2016-09-11
 * Time: 18:54
 */
/** @var Router $router */


$router -> get('/', function(){
    return view('note');
});
$router -> resource('note', App\Controller\NoteController::class);
