<?php
setcookie("mycookie","this is cookie ",time()+60*6);
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
    <?php
    if ( isset($_COOKIE) ) {
        echo "<h2>cookie set " . $_COOKIE["mycookie"] . "</h2>";
    } else {
        echo "<h2>cookie not set </h2>";
    }
    ?>
</body>
</html>