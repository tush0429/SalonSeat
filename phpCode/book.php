<?php

session_start();
$connect = mysqli_connect('localhost', 'root', '', 'salonseat');

$phoneNo = $_SESSION['uphno'];


$l = $_GET['t1'];
$m = $_GET['t2'];


$date = new DateTime();

$a = $date->format('d-m-Y');
$b = $_SESSION['uphno'];

$sql = "SELECT SUM(`servicePrice`) AS TotalItemsOrdered FROM services,cart WHERE services.serviceNo = cart.serviceCartId and cart.serviceUserPhno= '$phoneNo' ;";
$res =  mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($res)) {

    $c = $row[0];
}
$d = $l . "," . $m;
$e = "Pending";
$f = "1234567891";




echo "<h2>$a</h2>";
echo "<h2>$b</h2>";
echo "<h2>$c</h2>";
echo "<h2>$d</h2>";
echo "<h2>$e</h2>";
echo "<h2>$f</h2>";


$select = "INSERT INTO `appointment`(`orderDate`, `ApptUserPhno`, `totalAmt`, `Appdate`, `status`, `salonPhoneNo`) VALUES('$a','$b','$c','$d','$e','$f');";
$response1 = mysqli_query($connect, $select);

if ($response1) {

    $sql = "SELECT MAX(appointmnetNo) FROM appointment";
    $ordeMaxNo = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($ordeMaxNo)) {
        $OrderNo = $row['0'];

        $sql2 = "SELECT `serviceNo`, `serviceUserPhoneNo`, `serviceName`, `servicePrice`, `serviceFor`, `serviceType`, `salonName` FROM `services`,cart WHERE cart.serviceCartId=services.serviceNo and cart.serviceUserPhno='$b'";
        $cartData = mysqli_query($connect, $sql2);

        while ($row1 = mysqli_fetch_array($cartData)) {

            $serviceNo = $row1['0'];
            $serviceUserPhoneNo = $row1['1'];
            $serviceName = $row1['2'];
            $servicePrice = $row1['3'];
            $salonName = $row1['6'];

            $sql3 = "INSERT INTO `appointmentvalues`(`userOrderNo`, `userPhno`, `userServiceNo`, `userServiceName`, `userServiceAmt`, `bookedSalonName`, `serviceUserPhoneNo`) 
                VALUES ('$OrderNo','$b','$serviceNo','$serviceName','$servicePrice','$salonName','$serviceUserPhoneNo')";
            $response4 = mysqli_query($connect, $sql3);


            if ($response4) {

                $sql4 = "DELETE FROM `cart` WHERE serviceUserPhno='$b';";
                $response3 = mysqli_query($connect, $sql4);
                $value = 1;
            } else {
                $value = 0;
            }
        }
    }
} else {
    echo "Not";
}

$response = $value;
if ($response) {
    $sql5 = "UPDATE `appointment` SET `salonPhoneNo`='$serviceUserPhoneNo' WHERE appointmnetNo='$OrderNo'";
    $res = mysqli_query($connect, $sql5);

    echo "<script>alert('Appointment Booked Successfully');window.location = 'MyCart.php';</script>";
} else {
    echo "<script>aletrt('Appointment Not Booked Successfully');window.location = 'MyCart.php';</script>";
}
