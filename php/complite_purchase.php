<?php
    $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

    $id = $_COOKIE["id"];

    $result = $mysql->query("SELECT * FROM `purchase` WHERE `userId` = '$id'");

    while($userBusket = mysqli_fetch_assoc($result)) {
        $userId = $userBusket["userId"];
        $sneakerId = $userBusket["sneakerId"];
        $size = $userBusket["size"];
        $mysql->query("INSERT INTO `history` (userId, sneakerId, size) VALUES ($userId, $sneakerId, $size)");
    }

    $mysql->query("DELETE FROM `purchase`");

    $mysql->close();


    header("Location: /pages/profile.php");
?>