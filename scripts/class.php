<?php

// шифрование пароля "salt"+md5
$salt = "fasfasf34141$%612!#(";
$passwordHash = htmlspecialchars(md5($salt . $_POST['password']));

// создание класса 
    class createNewUser {
        public $login, $password, $email, $name;
    }

    $user = new createNewUser($_POST['form_user']);

    $user->login = htmlspecialchars($_POST['login']);
    $user->password = $passwordHash;
    $user->email = htmlspecialchars($_POST['email']);
    $user->name = htmlspecialchars($_POST['username']);
?>
