<?php
   $email =  filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 
   
   // в переменную login записываем значение из формы и фильтруем от лишних символов и пробелов
   // в пост передаем значение name нашего inputa

   $name =  filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING); 

   $pass =  filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 
 
    if(mb_strlen($email) < 5 || mb_strlen($email) > 90) {
        echo "Недопустимая длина email";
        exit();
    }
    
    else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit();
    }

    else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 20){
        echo "Недопустимая длина пароля (от 2 до 20 символов)";
        exit();
    }

    $pass = md5($pass."pass"); //хеширование

    $mysql = new mysqli('localhost','root','root','register_bd');
    // $mysql = new mysqli('localhost','id17559368_artem','2!cyhg\bSj_MGuki','id17559368_register_bd');
    $mysql->query("INSERT INTO `users`(`email`, `password`, `name`)
    VALUES('$email', '$pass', '$name')");

    $mysql->close();

    header('Location: /')
?>