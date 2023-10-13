<?php

$server_name = "localhost";
$default = "root";
$password = "";

$db_name = "test-db";
$conexion = mysqli_connect($server_name,$default,$password,$db_name);

if (!$conexion) {
    
    echo ("Connection failed");
}