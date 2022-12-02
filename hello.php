<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
</head>
<body>
<?php
session_start();
if (isset($_COOKIE["login"])) echo "<h1>" . "Privet, " . $_COOKIE["login"] . ":)" . "</h1>" . "<br>";
?>

<div class="logout">
    <a href="logout.php">Logout</a>
</div>
</body>
</html>

