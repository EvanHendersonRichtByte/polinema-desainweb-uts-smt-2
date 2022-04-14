<?php
session_start();
// print_r($_SESSION);

// echo $_SESSION['logged']['username'];


// $path = $_SERVER['SERVER_NAME'].'/the path';

// print_r("location: " . $path . "/dashboard.php");

// session_destroy();
// $realpath    = str_replace('\\', '/', dirname(__FILE__));

$path = preg_replace('/.*htdocs\\\/i', "", dirname(__FILE__));
echo $path;
