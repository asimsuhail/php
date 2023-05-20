<!DOCTYPE html>
<htmml>

<head>
    <title>PHP </title>
</head>

<body>
    <form action="" method="post">
	type anything:<input type="text" name="text" />
	<input type = "submit" value = "press NOw" />
	<?php
	    echo $_POST['text'];
	?>
	
	
</body>

</html>