<?php

$host = "localhost";
$user = "u681719709_Admin";
$pass = "654990aA";
$dbName = "u681719709_LWM";


//      CONNECT TO DATABASE     ///////////////////
$db = mysqli_connect($host, $user, $pass, $dbName) or die(mysqli_connect_error($db));
