<?php
/**
 * Created by PhpStorm.
 * User: Anwender
 * Date: 23.10.2014
 * Time: 10:35
 */
require_once("Model/AbsModel.php");
require_once("Model/UserModel.php");
require_once("Utilise/DatabaseHandler.php");
require_once("Utilise/Config.php");
require_once("Mockup/ObjectBase.php");
require_once("Mockup/User.php");

echo Config::getInstance()->getConfig("db");

$model = new UserModel();
$user = new User();
$user->Name = "'); drop database m151";
$user->Password = "Pedrett";

$model->addUser($user);
