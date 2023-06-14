<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "simple_task1";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
// define( 'USER_LEVEL_ADMIN', '1' );

if(!$conn){
    die("Could not connect to server: ".mysqli_connect_error());
}