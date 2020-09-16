<?php
require_once('AllFunction.php');
session_start();

$phoneNo = $_SESSION['uphno'];

if (isset($_POST['cartAdd'])) {

    $cartNo = $_POST['cartNo'];

    $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
    $select = "DELETE FROM `cart` WHERE `serviceCartId`=$cartNo and `serviceUserPhno`=$phoneNo";
    $result = mysqli_query($connect, $select);


    if ($result) {
        echo "<script>alert('Removed From Cart');window.location = 'MyCart.php';</script>";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="owlcss/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="owlcss/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://localhost/PhpSalonSeat/Style/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>My Cart</title>




</head>

<body>

    <!-- Navigation -->
    <div>
        <div>
            <?php


            $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
            $select = "SELECT `name` FROM `user` WHERE phoneNo=$phoneNo;";
            $response =  mysqli_query($connect, $select);

            if ($row = mysqli_fetch_row($response)) {
                $name = $row[0];
            }
            echo navbar($name);  ?>
        </div>
    </div>



    <div>
        <center>
            <h3 class="mt-2 animated slideInLeft" style="color:darkred; animation-delay:0.8s; font-weight:700;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 mx-auto">
                            <p class="card" style="border-radius:15px; background-color:darkslategrey; color:#fff; padding:10px;font-size:18px;">
                                My Cart
                            </p>
                        </div>
                    </div>
                </div>

            </h3>
        </center>

    </div>

    <div class="container-fluid">
        <div class="row mt-1 mb-5 animated slideInUp" style="animation-delay:1.0s;">

            <div class="col-md-8">
                <div class="row">
                    <?php

                    $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                    $select = "SELECT `serviceNo`, `serviceUserPhoneNo`, `serviceName`, `servicePrice`, `serviceFor`, `serviceType`, `salonName` FROM `services`,cart  WHERE cart.serviceCartId = services.serviceNo and cart.serviceUserPhno=$phoneNo;";
                    $response =  mysqli_query($connect, $select);



                    while ($row = mysqli_fetch_array($response)) {

                        echo "<div class='col-md-4'>
                    <form method='post'>
                    <div class='card' style='width: 18rem; border-radius: 15px;'>
                <div class='card-body'>
                <center>
                       <h5 class='card-title' style='color:teal; font-weight:700;'>$row[6]</h5>
                   </center> 
                    <h5 class='card-title' style='color:sienna; font-weight:700;'>$row[2]  </h5>
                    <div class='row mt-3 mb-3'>
                        <div class='col-md 6'>
                            <p class='card-text' style='font-weight:600; color:goldenrod;'>$row[4] </p>
                        </div>
                        <div class='col-md 4'>

                        </div>
                    </div>
                    <div class='row mt-1 mb-3'>
                        <div class='col-md 8'>
                            <p class='card-text' style='font-size:20px; font-style:oblique; font-weight:500; color:darkgreen;'>Rs $row[3] </p>
                        </div>
                        <div class='col-md 4' style='padding-left:80px;'>
                        <input type='hidden' name='cartNo' value='$row[0]'>
                        
                        <button  type='submit' class='btn btn-danger'  formaction='MyCart.php' name='cartAdd'>Remove
                        
                            
                        </div>
                    </div>

                </div>


            </div></form>
        </div>";
                    } ?>


                </div>

            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius:15px 50px;">
                    <div class="row" style="margin-left:15px; margin-right:15px;">
                        <div class="col-md 8">
                            <table>
                                <thead>
                                    <h4 style="color:teal; font-weight:500;"> Services</h4>
                                </thead>
                                <tr style="color:dodgerblue; font-weight:500;">
                                    <td>
                                        <hr style="border: 1px solid black;" />
                                        <?php
                                        $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                                        $select = "SELECT `serviceName` FROM `services`,cart  WHERE cart.serviceCartId = services.serviceNo and cart.serviceUserPhno=$phoneNo;";
                                        $response =  mysqli_query($connect, $select);
                                        while ($row = mysqli_fetch_array($response)) {
                                            echo "<p>$row[0]</p>";
                                        }
                                        ?>


                                    </td>
                                </tr>

                                <!--<hr style="border: 1px solid cornflowerblue;">-->
                                <tr style="color:dodgerblue;">
                                    <td><br />
                                        <h4>
                                            <center>Total</center>
                                        </h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md 4">
                            <table>
                                <thead>
                                    <h4 style="color:teal; font-weight:500;"> Price</h4>
                                </thead>

                                <tr style="color:dodgerblue; font-weight:500;">
                                    <td>
                                        <hr style="border: 1px solid black;" />
                                        <?php



                                        $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                                        $select = "SELECT `servicePrice` FROM `services`,cart  WHERE cart.serviceCartId = services.serviceNo and cart.serviceUserPhno=$phoneNo;";
                                        $response =  mysqli_query($connect, $select);
                                        while ($row = mysqli_fetch_array($response)) {
                                            echo "<p>$row[0]</p>";
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!--<hr style="border: 1px solid cornflowerblue;">-->
                                <tr class="accordion mt-2" style="color:dodgerblue;">
                                    <td><br><br>
                                        <h4>
                                            <center>
                                                <?php



                                                $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                                                $select = "SELECT SUM(`servicePrice`) AS TotalItemsOrdered FROM services,cart WHERE services.serviceNo = cart.serviceCartId and cart.serviceUserPhno= '$phoneNo' ;";
                                                $response =  mysqli_query($connect, $select);
                                                while ($row = mysqli_fetch_array($response)) {
                                                    echo "<p>$row[0]</p>";

                                                    $Total = $row[0];
                                                }
                                                ?>


                                            </center>
                                        </h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="row mt-3 ml-3 mr-2">
                    <a href="BookService.php" style="border-radius: 55px;" class="btn btn-dark btn-block btn-lg">Book Services</a>

                </div>
            </div>



        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>