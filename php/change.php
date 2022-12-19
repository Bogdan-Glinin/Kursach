<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $size36 = $_POST["size36"];
    $size37 = $_POST["size37"];
    $size38 = $_POST["size38"];
    $size39 = $_POST["size39"];
    $size40 = $_POST["size40"];
    $size41 = $_POST["size41"];
    $size42 = $_POST["size42"];
    $size43 = $_POST["size43"];
    $size44 = $_POST["size44"];

    echo gettype($price);

    $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

    $mysql->query("UPDATE `sneaker` SET `price` = $price, `size36` = $size36, `size37` = $size37, `size38` = $size38, `size39` = $size39, `size40` = $size40, `size41` = $size41, `size42` = $size42, `size43` = $size43, `size44` = $size44 WHERE `id` = $id");

    $mysql->close();

    header("Location: /pages/admin.php");

    //`name` = $name, `price` = $price, size36` = $size36 , `size37` = $size37, `size38` = $size38, `size39` = $size39, `size40` = $size40, `size41` = $size41, `size42` = $size42, `size43` = $size43, `size44` = $size44
?>