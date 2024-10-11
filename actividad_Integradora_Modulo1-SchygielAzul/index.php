<?php
session_start();
$_SESSION;

require_once "controllers/homeController.php";
require_once "controllers/errorController.php";

$home = new homeController();
$home -> controllerGetHome(); 

ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL & ~E_NOTICE);

