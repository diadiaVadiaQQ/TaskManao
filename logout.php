<?php
//завершение сессии
    session_start();
    session_destroy();
    header('Location: form_join.php');
    exit;
?>