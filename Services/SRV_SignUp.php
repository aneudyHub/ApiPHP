<?php
/**
 * Created by PhpStorm.
 * User: Aneudy
 * Date: 27/05/2016
 * Time: 22:59
 */
include $_SERVER['DOCUMENT_ROOT']."/ApiRest/Controller/userController.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = json_decode(file_get_contents("php://input"));
    $R = \Controller\userController::create($data);
    echo json_encode($R);
}

