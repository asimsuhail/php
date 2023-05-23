<!DOCTYPE html>
<?php 
session_start();
?>
<htmml>

<head>
    <title>PHP </title>
</head>

<body>
    <form action="session.php" method="post" >
         <input placeholder="Name" type = "text" name="user" value="<?php echo $_SESSION['user1'];?>"/>
         <input type="submit" value = "ok" />
</form>
	<?php
	   $username =  $_POST['user'];
    //    $_SESSION['user1'] = $username;

       echo "<p> ". $_SESSION['user1'] . "</p>";
       echo "<p>" . isset($_SESSION) . "</p>";
       echo "<p>" . session_status() . "</p>";
       echo "<p>"  . isset($_SESSION['user1']) . "</p>"
	?>
	
	
</body>

</html>

