<?php

$connect = mysqli_connect('localhost', 'root', '', 'salonseat');

$a = $_POST['t1'];
$b = $_POST['t2'];
$c = $_POST['t3'];


$select = "INSERT INTO `user`(`name`, `phoneNo`, `password`) VALUES ('$a','$b','$c');";
$response = mysqli_query($connect, $select);


if ($response) {
    echo "<script>alert('Register Successfull');window.location = 'redirect.php';</script>";
} else {
    echo "<script>alert('Not able to Register Successfull');</script>";
}
