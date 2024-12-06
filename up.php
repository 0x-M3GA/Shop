<?php
include('config.php');

if (isset($_POST['update'])) {
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name']; // تعديل الخطأ
    $image_up = "images/" . $image_name;
    $update = "UPDATE prod SET name='$NAME' , price='$PRICE' , image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);



    if (move_uploaded_file($image_location, $image_up)) {
        echo "<script>alert('Product Updated Successfully');</script>";
    } else {
        echo "<script>alert('Error - update failed');</script>";
    }
} else {
    echo "<script>alert('Error - Unable to insert product into database');</script>";
}

header('location: index.php');

?>