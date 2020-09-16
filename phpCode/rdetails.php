<?php
require_once('AllFunction.php');
session_start();

$phoneNo = $_SESSION['uphno'];
$orderNo = $_GET['a'];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <link href="owlcss/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="owlcss/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://localhost/PhpSalonSeat/Style/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>My Reservation</title>




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

        <div class="container">
            <div class="row animated slideInLeft" style="animation-delay:0.6s;">
                <div class="col-md-4 mx-auto">
                    <div class="card" style="border-radius:15px; background-color:darkslategrey; color:#fff;">
                        <center>
                            <h3>My Reservation Details</h3>
                        </center>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">


                    <?php

                    $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                    $select = "SELECT `userOrderNo`, `userServiceName`, `userServiceAmt`, `bookedSalonName` FROM `appointmentvalues` WHERE `userOrderNo`=$orderNo";
                    $response =  mysqli_query($connect, $select);



                    while ($row = mysqli_fetch_array($response)) {
                        echo '<div class="card mb-5 animated zoomIn" style="animation-delay:1.2s;">
                        <div class="card-header" style="font-size:20px;">
                       Service Name: ' . $row[1] . '
                        </div>
                        <div class="card-body">
                        <p class="card-title">Salon Name: ' . $row[3] . '</p>
                        <p class="card-text">Service Amount: &#x20B9; ' . $row[2] . '</p>
                        </div>
                    </div>';
                    }





                    ?>





                </div>
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