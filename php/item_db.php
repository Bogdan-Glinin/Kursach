<?php

$mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 1");

$itemId1 = $result->fetch_assoc();

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 2");

$itemId2 = $result->fetch_assoc();

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 3");

$itemId3 = $result->fetch_assoc();

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 4");

$itemId4 = $result->fetch_assoc();

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 5");

$itemId5 = $result->fetch_assoc();

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 6");

$itemId6 = $result->fetch_assoc();

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 7");

$itemId7 = $result->fetch_assoc();

$result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = 8");

$itemId8 = $result->fetch_assoc();

$mysql->close();
