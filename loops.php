<!DOCTYPE html>
<htmml>

<head>
    <title>PHP loops</title>
</head>

<body>
    
	<?php
	    $num = 10;
        while($num--)
         echo $num . "<br>";

         for($num=1988; $num <= 2023; $num++)
          echo $num . "<br>";

        $names = array("asim" , "suhail" );

        foreach($names as $val)
         echo $val . "<br>";

        


	?>
	
	
</body>

</html>