<!DOCTYPE html>
<htmml>

<head>
    <title>PHP </title>
</head>

<body>
    
	<?php
	
	 $fname = "Asim";
	 $lname = "Suhail";
	 $number1 = 33;
	 $number2 = 44;
	 $number3 = 55;
	 
	 echo "$number1 + $number2 = " . $number1 + $number2;
	 
	 echo "<br>". "$number1 / 4 = " .$number2  / 4;
	 
	 echo "<br>". "$number1 % 3 = " .$number1 % 3;
	 
	 echo "<br>" . "4 ** 3 = " . 4 ** 3;
	 
	 #assingment operators
	 $x = 5;
	 $y = 10;
	 
	 $x+=$y;
	 echo "<br>"."$x += $y    = " . $x;
	 
	 $x = 5;
	 $y = 10;
	 
	 $x*=$y;
	 echo  "<br>" . "$x *= $y    = " .$x;
	 $x = 4;
	 $y = 10;
	 
	 $y%=$x;
	 echo "<br>"."$x %= $y    = " .$y;
	 
	 $x = "asim ";
	 $y = "suhail";
	 
	 $x.=$y;
	 echo "<br>".$x ."<br>";
	 
	 # comparison oprators   ==, ===, !=, !==, <=

	 $x = 5;
	 $y = "5";
	 if($x == $y)
	  echo "5 is equal to string \"5\"<br>";

	 if($x === $y)
	  echo "number is equal to string <br>";
	else
	  echo "$x number is not equal to \"5\" string<br>";

	  $x = 4;
	  $y = 5;
	  if($x != $y )
	   echo "$x and $y are not equal<br>";
	
	   $x = 4;
	   $y = "4";
	   if($x != $y )
	   echo "$x and $y are equal but types are different <br>";

	   $x = 4;
	   $y = 5;
	   if($x <= $y )
	   echo "$x is less than $y <br>";

	   # increment decrement oprators
	   echo "x = $x";
	   echo "<br> after increment x = ". ++$x ."<br>";


	   #logical operators and or xor not
	   $x = 4;
	   $y = 5;
	   $z = 6;
	   if($x < $y and $x < $z )
	   echo "x = $x is smallest <br>";

	   $x = 4;
	   $y = 5;
	   $z = 6;
	   if($x < $y or $x < $z )
	   echo "x = $x is smaller <br>";

	   $x = 4;
	   $y = 8;
	   $z = 6;
	   if($x < $y xor $x < $z )
	   echo "one number smaller than z=$z but not both <br>";

	   $x = 4;
	   $y = 5;
	   $z = 6;
	   if(!(5==4))
	   echo "5 = 4 <br>";

	?>
		
</body>

</html>
