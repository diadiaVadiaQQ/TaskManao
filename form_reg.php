<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/form_reg.css">
</head>
<body>
    <div class="container">
  <?php
$jsonArray = [];
        // чтение файла 
if(file_exists('json/database.json')) {
  $json = file_get_contents('json/database.json');
  $jsonArray = json_decode($json, true);
}

  // подключаем класс
    require 'scripts/class.php';
  // подключаем проверку на совпадения по логину и имейлу
    require '/OSPanel/domains/TaskManao/scripts/checked.php';
  // подключаем файл с условиями
    require '/OSPanel/domains/TaskManao/scripts/conditions_reg.php';

    // запись в файл
if(($user && $bool === true) && ($user && $bool_email === true)) {
  $jsonArray[] = $user;
  file_put_contents('json/database.json', json_encode($jsonArray, JSON_FORCE_OBJECT));
  header("Location: form_join.php");
}
?>

        <form action="" method="post" name="form_user">
            <h1>——Registration——</h1>
            <br>
            <label for="">Login</label>
            <input type="text" name="login" placeholder="Write ur login.." required minlength="6">
            <span class="error">* <?php echo $loginErr;?></span>
            <br>
            <br>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Write ur password.."required minlength="6" maxlength="25">
            <span class="error">* <?php echo $passwordErr;?></span>
            <br>
            <br>
            <label for="">Confirm Password</label>
            <input type="password" name="conf_pass" placeholder="Confirm ur password.." required minlength="6" maxlength="25">
            <span class="error">* <?php echo $conf_passErr;?></span>
            <br>
            <br>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Write ur email.." required>
            <span class="error">* <?php echo $emailErr;?></span>
            <br>
            <br>
            <label for="">Name</label>
            <input type="text" name="username" placeholder="Write ur name.." minlength="2" >
            <span class="error">* <?php echo $usernameErr;?></span>
            <br>
            <br>
            <button type="submit">Confirm registration</button>
        </form>

      <?php
      ?>
    </div>
    <br>
    <a href="/">
        <button>Nazad</button>
    </a>
</body>
</html>