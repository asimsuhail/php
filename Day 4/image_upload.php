<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php image upload</title>
</head>
<body>
    <form action="image_upload.php" method="post" enctype="multipart/form-data">
        upload image: <input type="file" name="image" />
        <input type="submit" name="upload" value="upload files" />
    </form>
    <?php
    if ( isset($_POST["upload"]) ) {
        $image = $_FILES["image"]["name"];
        $image_tmp = $_FILES["image"]["tmp_name"];
        // echo $image;
        move_uploaded_file($image_tmp,"images/$image");
        echo "<img src='images/$image' width='700' height='300' />";
    }
    ?>
</body>
</html>