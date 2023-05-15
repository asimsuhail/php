<!DOCTYPE html>
<htmml>

<head>
    <title>PHP array</title>
</head>

<body>
    
	<?php
	$indexArray = array(2,5,6,4,2,6); 
        $str 	    = " In index array values of array can be accessed with indexes starting from 0 to n.";
        echo $str . '<br>';
        $len = count($indexArray);
        for($counter = 0; $counter < $len ; $counter++)
        echo $indexArray[$counter] . "<br>";
        
        
        $str = " In associative array values of array are stored in key value pair key => value and values are accessed with thier keys";
        echo $str . '<br>';
        $associativeArray = array("val1"=>34 , "val2"=>45, "val3"=> 56);
        
        echo $associativeArray['val1'] . "<br>";
        echo $associativeArray['val2'] . "<br>";
        echo $associativeArray['val3'] . "<br>";

	?>

</body>

</html>
