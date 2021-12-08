<?php
     $email =  filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 

     $pass =  filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 

     $pass = md5($pass."pass"); //хеширование

     $mysql = new mysqli('localhost','root','root','register_bd');
    // $mysql = new mysqli('localhost','id17559368_artem','2!cyhg\bSj_MGuki','id17559368_register_bd');
    
     $result = $mysql->query("SELECT * FROM `users` 
     WHERE `email` = '$email' AND `password` = '$pass'");
 
    $user = $result->fetch_assoc(); //получаем массив
    if(count($user) == 0){
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie("user", $user['name'],time() + 3600, "/");

     $mysql->close();
 
     header('Location: /')

?>