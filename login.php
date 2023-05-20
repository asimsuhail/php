<!DOCTYPE html>
<?php
// session_start();
?>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php 
    if ( session_status() ) {
        
    }
    if ( isset($_POST['logout']) ) {
        if ( $_SESSION['email'] == "asim@gmail.com" and $_SESSION['password'] == "1234" ) {
            // ... credentials check ...
            session_start();
            // remove all session variables
            session_unset();
            // destroy the session
            session_destroy();
            include('login.php');
            
        } else {
            // ... login page prompt ...
            ?>
            <form action="dashboard.php" method = "post" >
    
           <input type="text" name="email" placeholder="email" />
           <input type="password" name="password" placeholder ="password" />
           <input type="submit" value="submit" />
    
        </form>
        <?php
        }
    } else {
        // ... login page prompt ... 
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