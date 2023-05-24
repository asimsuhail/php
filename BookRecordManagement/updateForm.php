<?php
 $con = mysqli_connect('localhost','root');
 
 mysqli_select_db($con,'brm_db');
 
 $q = "select * from book";
 
 $result = mysqli_query($con, $q);
 
 $n = mysqli_num_rows($result);
 
 mysqli_close($con);
?>

<!DOCTYPE html>
<html>
 <head>
  <title> Update book records </title>
  <link rel="stylesheet" href="./css/viewStyle.css" />
 </head>
 
  <body>
   <h1> Book Record Management </h1>
   <form action="updation.php" method="post" >
   <table id="view_table" >
    <tr>
	 <th>Book ID</th>
	 <th>Title</th>
	 <th>Price</th>
	 <th>Author</th>
	</tr>
    <?php 
	 for($i=1;$i<=$n;$i++)
	 {
		 $row = mysqli_fetch_array($result);
		
		?>
		<tr>
			<td><input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid']; ?>" /></td>
			<td><input name="title<?php echo $i;?>" value="<?php echo $row['title'];  ?>" /></td>
			<td><input name="price<?php echo $i;?>" value="<?php echo $row['price']; ?>" /></td>
			<td><input name="author<?php echo $i;?>" value="<?php echo $row['author']; ?>" /> </td>
		</tr>
			
		
		<?php
	 }
	?>
   </table>
   <input type="submit" value="update" />
   </form>
  </body>
 </html>