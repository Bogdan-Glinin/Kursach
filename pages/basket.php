<?php

    $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

    $id = $_COOKIE["id"];

    $result = $mysql->query("SELECT * FROM `purchase` WHERE `userId` = '$id'");

    $mysql->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css" />
    <title>Корзина</title>
</head>
<body>
<div class="wrapper">
      <div class="wrapper__body">
        <div class="body__header">
          <a href="/pages/index.php" class="header__logo-button">
            <img src="/img/photo_2022-12-15_19-05-49.png" alt="" />
          </a>
          <div class="header__logo">
            <img src="/img/345.png" alt="" />
          </div>
          <div class="header__menu">
            <a <?php
              if($_COOKIE["id"]){
                echo 'onclick=', '"location.href=', "'profile.php'", ';"';
              }
              else{
                echo "href='#popup'";
              }
            ?> class="header__lk popup_link">
              <img src="/img/urod.png" alt="" />
              <div class="lk">Профиль</div>
            </a>
            <div onclick="location.href='basket.php'" class="header__bucket">
              <img src="/img/bucket.png" alt="" />
              <div class="lk">Корзина</div>
            </div>
          </div>
        </div>
        <div class="basket__body">
            <?php
                if(!$_COOKIE["id"]){
                    ?>
                    <div class="error">
                    Вы не вошли в аккаунт
                </div>
            <?php
                }
                else{
                    $price = 0;
                    while($userBusket = mysqli_fetch_assoc($result)) {
                        $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');
                        $sneakerId = $userBusket["sneakerId"];
                        $sneaker = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = '$sneakerId'");
                        $sneaker = $sneaker->fetch_assoc();
                        $price += $sneaker["price"];
                    ?>
                        <div class="busket__item">
                        <div class="history__img">
                  <img src="<?php echo $sneaker["img1"]; ?>" alt="">
                  </div>
                    <div class="item__name">
                      <?php echo $sneaker["name"]; ?>
                    </div>
                        </div>
                        <div class="item__size">
                            Размер
                        <?php echo $userBusket["size"]; ?>
                        </div>
                        <form action="/php/delete.php" method="POST">
                            <input type="text" name="delete" value=<?php echo $userBusket["id"]?> style="display:none">
                        <div class="delete__item">
                            <button action="submit">
                                Удалить из корзины
                            </button>
                        </div>
                        </form>
                    <?php };
                    $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

                    $id = $_COOKIE["id"];
                
                    $result = $mysql->query("SELECT * FROM `purchase` WHERE `userId` = '$id'");
                
                    $mysql->close();
                    if(!$userBusket = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="error">
                        Корзина пустая
                    </div>
                    <?php }
                else{
                    ?>
                    </div>

<div class="basket__price">
    Общая стоимость: 
    <?php 
        echo $price;  
    ?>
    руб
</div>
<form action="/php/complite_purchase.php">
<button action="submit" class="basket__complite">
    Оформить заказ
</button>
</form>
                <?php }}?>

        
            </div>
            </div>
        
    

<div class="popup" id="popup">
        <div class="popup_body">
            <form action="/php/auth.php" method="post">
                <div class="popup_content">
                    <div class="popup_letter"></div>
                    <div class="popup_title">Вход в личный кабинет</div>
                    <input type="text" placeholder="Логин" name="auth_login" class="popup_login popup_input">
                    <input type="password" placeholder="Пароль" name="auth_password" class="popup_password popup_input">
                    <button action="submit" class="popup_button">Вход</button>
                    <a href="#popup_2" class="popup_link popup_registration">
                        <div>Вас еще нет в системе?<br>
                            Зарегистрируйтесь!</div>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="popup_2">
        <div class="popup_body">
            <form action="/php/registration.php" method="post">
                <div class="popup_content">
                    <div class="popup_letter"></div>
                    <div class="popup_title">Регистрация</div>
                    <input type="text" id="popup_name" placeholder="Ваше Имя:" name="popup_name"
                        class="popup_name popup_input">
                    <input type="email" id="popup_email" placeholder="Ваш E-mail:" name="popup_email"
                        class="popup_email popup_input">
                    <input type="password" id="popup_password" placeholder="Пароль" name="popup_password"
                        class="popup_password popup_input">
                    <input type="password" id="popup_passwordRepeat" name="popup_passwordRepeat"
                        placeholder="Повторите пароль" class="popup_passwordRepeat popup_input">
                    <button action="submit" id="popup_button" class="popup_button ">Зарегистрироваться</button>
                    <div id="error"></div>
                </div>
            </form>
        </div>
    </div>
    <script src="/js/popup.js"></script>
    <script src="/js/registration.js"></script>
</body>
</html>