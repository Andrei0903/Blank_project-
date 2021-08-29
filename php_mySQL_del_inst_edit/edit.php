<?php
 include_once 'config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);
?>

<h1>Edit product</h1>


<form action="vendor/edit.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <input type="text" name="title" value="<?=$product['title']?>">
    <p>Description</p>
    <textarea name="description"><?=$product['description']?></textarea> 
    <p>price</p>
    <input type="number" name="price" value="<?=$product['price']?>"> <br><br>
    <button type="submit">Edit product</button>
</form>