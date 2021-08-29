<?php
include_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$id = $_POST['id'];


mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `products`.`id` = '$id'");

header('Location: /');  

