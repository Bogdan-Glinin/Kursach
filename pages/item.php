<?php
    $id = $_POST['id'];

    $mysql = new mysqli('localhost', 'root', '', 'sneakerShop');

    $result = $mysql->query("SELECT * FROM `sneaker` WHERE `id` = $id");

    $item = $result->fetch_assoc();

    $name = $item['name'];
    $price = $item['price'];
    $img1 = $item['img1'];
    $img2 = $item['img2'];
    $img3 = $item['img3'];
    $img4 = $item['img4'];
    $img5 = $item['img5'];
    $size36 = $item['size36'];
    $size37 = $item['size37'];
    $size38 = $item['size38'];
    $size39 = $item['size39'];
    $size40 = $item['size40'];
    $size41 = $item['size41'];
    $size42 = $item['size42'];
    $size43 = $item['size43'];
    $size44 = $item['size44'];
    $size45 = $item['size45'];

    $array = array($size36, $size37, $size38, $size39, $size40, $size41, $size42, $size43, $size44, $size45);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title><?php echo $name ?></title>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper__body">
        <div class="body__header">
          <a href="../pages/index.php" class="header__logo-button">
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
            ?> 
            
            class="header__lk popup_link">
              <img src="/img/urod.png" alt="" />
              <div class="lk">Профиль</div>
            </a>
            <div onclick="location.href='basket.php'" class="header__bucket">
              <img src="/img/bucket.png" alt="" />
              <div class="lk">Корзина</div>
            </div>
          </div>
        </div>
        <div class="body__search">
          <input
            class="search"
            id="search"
            type="text"
            placeholder="Поиск по сайту"
          />
          <label for="search">
            <img src="/img/search.png" alt="" />
          </label>
        </div>
        <div class="body__item">
            <div class="item__header">
                <?php echo $name ?>
            </div>
            <div class="item__body">
            <div class="swiper-conatainer">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="slide-image" src="<?php echo $img1; ?>"
                                    alt=""></div>
                    <div class="swiper-slide"><img class="slide-image" src="<?php echo $img2; ?>"
                                    alt=""></div>
                    <div class="swiper-slide"><img class="slide-image" src="<?php echo $img3; ?>"
                                    alt=""></div>
                    <div class="swiper-slide"><img class="slide-image" src="<?php echo $img4; ?>"
                                    alt=""></div>
                    <div class="swiper-slide"><img class="slide-image" src="<?php echo $img5 ?>"
                                    alt=""></div>
              </div>
              </div>
              <div class="item__body-info">
                <div class="item__body-price">
                  <?php echo $price ?> руб.
                </div>
                <div class="item__body-size">
                  <div class="size__select">
                    Выберите размер
                  </div>
                      <form action="../php/purchase.php" method="post">
                      <input type="text" name="id" value="<?php echo $id;?>" style="display:none" >
                      <select required name="size">
                      <?php
                        $count = 36;
                        for($i = 0; $i<count($array)-1; $i++){
                          if($array[$i] > 0){
                            echo '<option class="size" value=', $count, '>' ,  $count,  '</option>';
                           
                          }
                          $count++;
                        }
                      ?>
                      </select>
                      
                      <button action="submit">Добавить в корзину</button>
                      </form>
                </div>
              </div>
            </div>
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

    <script src="/js/size.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/registration.js"></script>
    <script src="/js/slider.js"></script>
</body>
</html>