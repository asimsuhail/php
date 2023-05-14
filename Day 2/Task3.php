<!DOCTYPE html>
<htmml>

<head>
    <title>PHP array</title>
</head>

<body>
    
	<?php
	    $myarray = array(2 , 2, 3, 4 ,5 ,6 , 7 , 8 , 9);

        foreach($myarray as $index)
         echo $index . "<br>";

         echo "=======================================<br>";
$num = 0;
        $len = count($myarray);
         while($num <  $len-1)
         {
            
          echo $myarray[$num] . "<br>";
          $num++;
         }


	?>
	
	
</body>

</html>