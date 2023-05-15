<!DOCTYPE html>
<htmml>

<head>
    <title>PHP array</title>
</head>

<body>
    
	<?php
	$myarray = array(1,2,2,4,5,6,7,8,9);
        $len     = count($myarray);
        for ($i = 1 ; $i <= $len ; $i++) {
            if($i % 3 == 1)
            	echo "[ ";
            echo $myarray[$i-1] . " ";
            if($i % 3 == 0 )
            	echo "]<br>";
        }
        
        
        echo "<br><br>=========================================<br><br>";
        $j = 0;
        for ($i = 0; $i < $len ; $i++) {
            echo "[ ";
            for($j = $i%3; $j < 3 ; $j++ )
             echo $myarray[$j] . " ";
            echo "]<br>";
        }

	?>
	
</body>

</html>
