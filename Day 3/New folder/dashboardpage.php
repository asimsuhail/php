<!DOCTYPE html>
<?php
if ( isset($_POST["logut"]) ) {
    session_start();
    session_unset();
    session_destroy();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loginpage.php">
        <input type="submit" value="Sign Out" name="logout" />
    </form>
</body>
</html>