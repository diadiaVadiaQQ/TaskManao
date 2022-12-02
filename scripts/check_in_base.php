<?php

// проверка логина в базе
    function checkInBaseLogin($jsonArray, $str) {
        for($i=0;$i<count($jsonArray);$i++) {
            $a = $jsonArray[$i]['login'];
            if($a == $str) {
                $status = true;
                break;
            } else {
                $status = false;
            }
        } return $status;
    }
// проверка пароля в базе
    function checkInBasePassword($jsonArray, $str) {
        for($i=0;$i<count($jsonArray);$i++) {
            $salt = "fasfasf34141$%612!#(";
            $str= htmlspecialchars(md5($salt . $_POST['pass']));
            $a = $jsonArray[$i]['password'];
            if($a == $str) {
                $status = true;
                break;
            } else {
                $status = false;
            }
        } return $status;
    }


//проверка логина и пароля в базе
    function checkAccount($jsonArray, $login, $passHash) {
        for($i=0;$i<count($jsonArray);$i++) {
            $salt = "fasfasf34141$%612!#(";
            $passHash = htmlspecialchars(md5($salt . $_POST['pass']));
            $login = $_POST['login'];
            if(($login == $jsonArray[$i]['login']) && ($passHash == $jsonArray[$i]['password'])) {
                $bool_acc = true;
                break;
            } else {
                $bool_acc = false;
            }

        }return $bool_acc;
    }
?>