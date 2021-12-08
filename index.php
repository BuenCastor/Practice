<!DOCTYPE html>
<html>

<head>
    <title>test 2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="st1.css">
</head>

<body>
    
    <header>
        <h2 class="logo">Система поддержки проектов</h2>
        <nav>
            <ul>
                <li><a href="#" class="button">Главная</a></li>
                <li><a href="#" class="button">Создать</a></li>
                <?php
                
                     if($_COOKIE["user"] == ''):
                ?>
                <li><a href="#" id="button1" class="button">Вход</a></li>
                <li><a href="#" id="button2" class="button">Регистрация</a></li>
                <?php else:?>
                <li><a href="#"  class="button">Привет <span style="color: red; font-size: 25px"> <?=$_COOKIE['user']?></span></a></li>
                <li><a href="php/exit.php"  class="button">Выход</a></li>
                 
                <?php endif;?>
            </ul>
        </nav>
    </header>

    
     
    <div class="bg-modal1">
        <div class="modal-contents">

            <div class="close1">+</div>

            <h1>Авторизация</h1>
            <form action="php/auth.php" method="post"><br>
                
                <input type="email" class = "form-control" name="email"
                id = "name" placeholder="введите E-Mail">

                <input type="password" class = "form-control" name="pass"
                id = "pass" placeholder="введите пароль">

                <button class="btn btn-success" type="submit">Войти</button>
            </form>
        </div>
    </div>

    <div class="bg-modal2">
        <div class="modal-contents">

            <div class="close2">+</div>
            <h1>Регистрация</h1>
            <form action="php/check.php" method="post">
                <input type="text" class = "form-control" name="name"
                id = "login" placeholder="введите имя">

                <input type="email" class = "form-control" name="email"
                id = "name" placeholder="введите E-Mail">

                <input type="password" class = "form-control" name="pass"
                id = "pass" placeholder="введите пароль">

                <button class="btn btn-success" type="submit">Зарегестрировать</button>
            </form>
        </div>
    </div>
   
    
    <div>
        <h1 class="h1_1">Создавай и управляй </br>своими проектами</h1>
        <img src="img/main.png" class="imgMain">
    </div>

    <script src="js.js"></script>

</body>

</html>