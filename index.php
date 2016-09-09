<?php

header("Content-Type:text/html;charset=UTF-8");

if (!@$_GET['action']){
    include "note.html";
    exit();
}
include_once 'Note.php';
$data = include 'handle.php';
echo json_encode($data);