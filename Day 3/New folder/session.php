<?php
session_start();

echo count($_SESSION);
// echo isset
$_SESSION["abc"] = 52;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newsesion.php">
       <input type="submit">
    </form>
</body>
</html>