<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    if ( isset($_POST['submit']) ) {
        $day3_email           = $_POST['email']; 
        $day3_password        = $_POST['password'];
        $_SESSION['email']    = $day3_email;       // storing email in session variable
        $_SESSION['password'] = $day3_password;  //storing password in session variable
        
        if ( $_SESSION['email'] == "asim@gmail.com" and $_SESSION['password'] == "1234" ) {
            // .. credentials check ... 
            ?>
            <form action=  "control.php" ><input type="submit" name="logout"  value="logout"  /></form>;
            <?php
        } else {
            // ... go to log in page and enter credentials ...
            include('signin.php');
        }
    } else {
        // ... go to log in page and enter credentials ...
        include('signin.php');
    }
    ?>
</body>
</html>
