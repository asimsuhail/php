<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
</head>
<body>
    <form action="user.php" method="post">
        <input type="text" placeholder="name" name="user" /><br>
        <input type="text" placeholder="mail" name="mail" /><br>
        <input type="password" placeholder="pass" name="pass" /><br>
        <input type="submit" name="submit" value="ok" /><br><br>
        <input type="submit" name="show" value="show users" />
    </form>
</body>
<?php
if ( isset($_POST["submit"]) ) {
    $con = mysqli_connect("localhost","root","","mydatabase");
    if ( !$con ) {
        echo " failed ";
    } else {
        echo " successful ";
        $user_name = $_POST["user"];
        $user_mail = $_POST["mail"];
        $user_pass = $_POST["pass"];
        $q ="INSERT INTO user(name, email ,password) values('$user_name','$user_mail','$user_pass')";
        $insert_query = mysqli_query($con, $q);

    }
}
?>

<?php
if ( isset($_POST["show"]) ) {
    $con = mysqli_connect("localhost","root","","mydatabase");
    if ( !$con ) {
        echo "<h2> failed to connect </h2>" . mysqli_connect_error();
    } else {
        echo "<h2> connection successfull </h2>";
        $select_users = "select * from user";

        $result = mysqli_query( $con, $select_users );
        
        echo "<table border='1'>";
        while( $row = mysqli_fetch_array($result) ) {

            echo "<tr>";
            echo "<td>" . $row[0] . "</td>" ;
            echo "<td>" . $row[1] . "</td>" ;
            echo "<td>" . $row[2] . "</td>" ;
            echo "<td>Delete</td>" ;
            echo "<td>Update</td>" ;
            echo "</tr>";
        }
        echo "</table>";

    }
}
?>

</html>