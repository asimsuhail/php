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
    
        
     if ( isset($_SESSION['email']) and isset($_SESSION['password']) ) {
        // ... dash page prompt ... 
        // session_start();
        echo "session on";
        // if( $_SESSION['email'] == "asim@gmail.com" and $_SESSION['password'] == "1234" )
            include('dash.php');
        // else
        //     include('signin.php');
    } else {
        ?>
        <form action="dash.php" method = "post" >
    
           <input type="text" name="email" placeholder="email" />
           <input type="password" name="password" placeholder ="password" />
           <input type="submit" name="submit" value="submit" />
    
        </form>
        <?php
    }
    ?>
</body>
</html>