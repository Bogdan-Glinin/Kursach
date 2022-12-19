<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css" />
    <title>ADMIN</title>
</head>
<body>
    <div class="admin__wrapper">
    <div class="admin__header">
        Обувь:
    </div>
    <?php
    $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

    $sneaker = $mysql->query("SELECT * FROM `sneaker`");

    while($sneakers = mysqli_fetch_assoc($sneaker)){
        ?>
        <form action="/php/change.php" method="POST">
        <div class="admin__item">
        <div class="name"><?php echo $sneakers["name"];?></div>
        <input name="id" type="text" value = "<?php echo $sneakers["id"];?>" style="display: none;">
        <div>Цена</div>
        <input name="price" type="text" value = "<?php echo $sneakers["price"];?>">
        <div>Кол-во размера 36</div>
        <input name="size36" type="text" value = "<?php echo $sneakers["size36"];?>">
        <div>Кол-во размера 37</div>
        <input name="size37" type="text" value = "<?php echo $sneakers["size37"];?>">
        <div>Кол-во размера 38</div>
        <input name="size38" type="text" value = "<?php echo $sneakers["size38"];?>">
        <div>Кол-во размера 39</div>
        <input name="size39" type="text" value = "<?php echo $sneakers["size39"];?>">
        <div>Кол-во размера 40</div>
        <input name="size40" type="text" value = "<?php echo $sneakers["size40"];?>">
        <div>Кол-во размера 41</div>
        <input name="size41" type="text" value = "<?php echo $sneakers["size41"];?>">
        <div>Кол-во размера 42</div>
        <input name="size42" type="text" value = "<?php echo $sneakers["size42"];?>">
        <div>Кол-во размера 43</div>
        <input name="size43" type="text" value = "<?php echo $sneakers["size43"];?>">
        <div>Кол-во размера 44</div>
        <input name="size44" type="text" value = "<?php echo $sneakers["size44"];?>">
        </div>
        <button action="submit">Изменить данные</button>
        </form>

    <?php
    }
    ?>
    </div>
<form action="../php/exit.php">
            <button class="exit">Выйти из профиля</button>
          </form>
</body>
</html>