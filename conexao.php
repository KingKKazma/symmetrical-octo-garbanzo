<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$database = "crud";
$username = "root";
$password = "Hibiki_29182"; 
$conexao= mysqli_connect($servername, $username, $password, $database);