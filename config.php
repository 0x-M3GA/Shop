<?php
$con = mysqli_connect('localhost', 'root', '123456789', 'online');


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>