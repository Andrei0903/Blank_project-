<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "bg5";

$connect = new mysqli($servername, $username, $password, $database);

if(!$connect){
    echo "error connect database";
}