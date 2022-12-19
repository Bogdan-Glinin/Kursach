<?php

    if($user = $_COOKIE["id"]){
        $id = $_POST["id"];
        $size = $_POST["size"];

        $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

        $mysql->query("INSERT INTO `purchase` (userId, sneakerId, size) VALUES ($user, $id, $size)");

        $mysql->close();

        header("Location: /pages/basket.php");
    }
    else{
        header("Location: /pages/index.php");
    }
?>
