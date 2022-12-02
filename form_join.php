<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/join.css">
    <title>Join</title>
</head>
<body>
<?php
    $jsonArray = [];
    // чтение файла 
    if(file_exists('json/database.json')) {
    $json = file_get_contents('json/database.json');
    $jsonArray = json_decode($json, true);
    }
    // подключение файлов
    require 'scripts/class.php';
    require 'scripts/check_in_base.php';
    require 'scripts/conditions_join.php';
?>
    <div class="main">
        <div class="container">
            <form action="" method="post">
                <p><b>——Welcome again——</b></p>
                <label for="">Login</label>
                <input type="text" name="login" placeholder="Write ur login.." required minlength="6">
                <span><?php echo $loginArr?></span>
                <br>
                <br>
                <label for="pass">Password</label>
                <input type="password" name="pass" placeholder="Write ur password.." required minlength="6">
                <span><?php echo $passwordArr?></span>
                <br>
                <span class="error"><?php echo $checkLoginArr; ?></span>
                <button type="submit">Join</button>
            </form>
        </div>
    </div>
    <br>
    <a href="/">
        <button>Nazad</button>
    </a>
</body>
</html>