<?php
ob_start();
session_start();
//session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ .DS ."templates".DS."front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__.DS."templates".DS."back");

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER","root");
defined("DB_PASSWORD") ? null : define("DB_PASSWORD",'');
defined("DB_DATABASE") ? null : define("DB_DATABASE",'ecom_db');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

require ('functions.php');
//require_once ('cart.php');

