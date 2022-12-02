<?php

// проверка логина
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["login"])) {
            $loginErr = "Введите ваш login";
        } elseif(checkLogin($jsonArray, $_POST['login']) === false) {
            $loginErr = 'Имя занято';
            $bool = false;
        } else {
            $bool = true;
            $login = ($_POST["login"]);
        }
//проверка пароля   
        if(empty($_POST["password"])) {
            $passwordErr = "Введите пароль";
        } else {
            $password = ($_POST["password"]);
        }       
// проверка повторения пароля   
        if (empty($_POST["conf_pass"])) {
        $conf_passErr = "Подвердите пароль";
        } elseif($_POST['password'] != $_POST['conf_pass']){
            $conf_passErr = 'Пароли не совпадают';
            $bool = false;
        } else {
            $conf_pass = ($_POST["conf_pass"]);
        }   
// проверка имейла
        if(empty($_POST["email"])) {
        $emailErr = "Введите ваш email";
        } elseif(checkEmail($jsonArray, $_POST['email']) === false) {
            $emailErr = 'Данный email-адрес уже занят';
            $bool = false;
        } else {
            $email = ($_POST["email"]);
            $bool_email = true;
        }
//проверка имени
        if (empty($_POST["username"])) {
        $usernameErr = "Введите имя пользователя";
        } else {
        $username = ($_POST["username"]);
        }
    }
?>