<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['login'])) {     
            $loginArr = 'Введите логин';  //понимаю,что она никогда не выведется из-за required,но я не парюсь
        } elseif(checkInBaseLogin($jsonArray, $_POST['login']) == false ){
        
        } elseif(checkInBaseLogin($jsonArray,$_POST['login']) == true) {
            $login = ($_POST["login"]);
        }

        if(empty($_POST['pass'])) {
            $passwordArr = 'Введите пароль';  //понимаю,что она никогда не выведется из-за required,но я не парюсь
        } elseif(checkInBasePassword($jsonArray, $str) == false) {
        
        } elseif(checkInBasePassword($jsonArray, $str) == true) {
            $password = ($_POST['pass']);
        }

        if(checkAccount($jsonArray, $login, $passHash) == true) {
            session_start();
            $_SESSION['auth'] = true;
            $_SESSION['login'] = $_POST['login'];
            setcookie("login", $_POST['login'], time() + 60);
            header("Location: hello.php");
        } else {
            $checkLoginArr = 'Неправильный логин или пароль';
        }
        
        
    }
?>