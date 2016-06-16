<?php
/**
 * Created by PhpStorm.
 * User: Aneudy
 * Date: 27/05/2016
 * Time: 22:13
 */
include $_SERVER['DOCUMENT_ROOT']."/ApiRest/Controller/userController.php";

$User=\Controller\userController::Index();
return json_encode($User);