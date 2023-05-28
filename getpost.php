<!DOCTYPE html>
<htmml>

<head>
    <title>PHP </title>
</head>

<body>
    <form action="getpost.php" method="post" >
         <input placeholder="Name" type = "text" name = "user" />
         <input type="submit" value = "ok" />
</form>
	<?php
	   
        echo $_POST['user'];
	?>
		
</body>

</html>
