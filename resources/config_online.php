<?php

ob_start();
session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ .DS ."templates".DS."front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__.DS."templates".DS."back");

defined("DB_HOST") ? null : define("DB_HOST", "kiakaha48921.ipagemysql.com");
defined("DB_USER") ? null : define("DB_USER","maya_admin_db");
defined("DB_PASSWORD") ? null : define("DB_PASSWORD",'Maya123!');
defined("DB_DATABASE") ? null : define("DB_DATABASE",'maya_pieced');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

require ('functions.php');

