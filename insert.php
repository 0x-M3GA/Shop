<?php
include('config.php');

if (isset($_POST['upload'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name']; // تعديل الخطأ
    $image_up = "images/" . $image_name;

    
    $insert = "INSERT INTO prod (name, price, image) VALUES ('$NAME', '$PRICE', '$image_up')";

    
    if (mysqli_query($con, $insert)) {
        
        if (move_uploaded_file($image_location, $image_up)) {
            echo "<script>alert('Product Uploaded Successfully');</script>";
        } else {
            echo "<script>alert('Error - Image upload failed');</script>";
        }
    } else {
        echo "<script>alert('Error - Unable to insert product into database');</script>";
    }

    header('location: index.php');
}
?>
