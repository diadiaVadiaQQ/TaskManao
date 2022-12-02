<?php
//функция для проверки имейла в базе
    function checkEmail($jsonArray, $str)  {
        for($i=0; $i<count($jsonArray);$i++) {
            $n = $jsonArray[$i]['email'];
            if($n == $str) {
                $bool_email = false;
                break;
            } else {
                $bool_email = true;
            }
        } return $bool_email;
    }
//функция для проверки логина в базе
    function checkLogin($jsonArray, $str)  {
        for($i=0; $i<count($jsonArray);$i++) {
            $n = $jsonArray[$i]['login'];
            if($n == $str) {
                $bool = false;
                break;
            } else {
                $bool = true;
            }
        } return $bool;
    }
?>