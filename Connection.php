<?php

$host = "localhost";
$user = "u681719709_Admin";
$pass = 'process.env.DATABASE_PRIVATE_KEY';
$dbName = "u681719709_LWM";


//      CONNECT TO DATABASE     ///////////////////
$db = mysqli_connect($host, $user, $pass, $dbName) or die(mysqli_connect_error($db));
