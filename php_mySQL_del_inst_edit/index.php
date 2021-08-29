<?php
include 'config/connect.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php IRDS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </tr>

        <?php
        $product =  mysqli_query($connect, "SELECT * FROM `products`");
        $product = mysqli_fetch_all($product);
        
        foreach ($product as $products){
            ?>
        
        <tr>
            <td><?=$products[0]?></td>
            <td><?=$products[1]?></td>
            <td><?=$products[2]?></td>
            <td><?=$products[3]?></td>
            <td><a href="edit.php?id=<?=$products[0]?>">Edit</a></td>
            <td><a href="vendor/delete.php?id=<?=$products[0]?>" class="del">Delete</a></td>
        </tr>
        <?php
        }
        
        ?>

        
    </table>
<hr>
        <h1>add product</h1>
        <form action="vendor/add.php" method="post">
            <input type="text" name="title">
            <p>Description</p>
            <textarea name="description"></textarea> 
            <p>price</p>
            <input type="number" name="price"> <br><br>
            <button type="submit">Add new product</button>
        </form>

   </body>
</html>

