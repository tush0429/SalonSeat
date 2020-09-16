<?php
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="owlcss/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="owlcss/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://localhost/PhpSalonSeat/Style/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>




</head>

<body>

    <!-- Navigation -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">

            <a class="navbar-brand" href="./index.php" style="font-family: 'Pacifico', cursive;
        font-size: 32px; font-weight:bolder; color:#fff;">
                <img src="http://localhost/PhpSalonSeat/Source/hairdresser%20(1).png" width="50" height="40" style="margin-top:-10px;" /> SalonSeat</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">

                        <a class="nav-link" href="./index.php" class="btn btn-info" style="font-weight:600; font-size:20px; color:white;">
                            Home
                        </a>


                    </li>
                </ul>
                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" href="#" style="text-decoration:none;">
                            <h5 style="color:white; text-decoration:none;">Login</h5>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container mt-2">
        <div class="row animated zoomIn" style="animation-delay:0.5s;">
            <div class="col-md-8">
                <div class="card" style="border-radius: 10px;">
                    <div class="row">

                        <?php
                        $a = $_POST['t1'];
                        $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                        $select = "SELECT * FROM `salondeatils` where salonPhNo=$a";
                        $response =  mysqli_query($connect, $select);


                        while ($row = mysqli_fetch_array($response)) {

                            echo "<div class='col-md-5 animated zoomIn' style='animation-delay:1s;'>
                                    <div class='card-body'>
                                        <img src='http://localhost/SalonSeat/v1/Images/$row[7]' width='120' height='180' class='card-img-top' style='border-radius: 15px 50px 30px;'>
                                    </div>
                                </div>
                                <div class='col-md-7 animated zoomIn' style='animation-delay:1s;'>
                                    <div class='card-body mt-4'>
                                        <h5 class='card-title' style='color:sienna; font-weight:700;'> $row[1] </h5>
                                        <p class='card-text' style='font-weight:600; color:goldenrod;'> $row[4] </p>
                                    </div>
                                </div>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-5 mb-5 animated slideInUp" style="animation-delay:1.8s;">


            <?php


            $a = $_POST['t1'];
            $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
            $select = "SELECT `serviceNo`, `serviceUserPhoneNo`, `serviceName`, `servicePrice`, `serviceFor`, `serviceType`, `salonName` FROM `services` WHERE serviceUserPhoneNo=$a";
            $response =  mysqli_query($connect, $select);


            while ($row = mysqli_fetch_array($response)) {

                echo "<div class='col-md 3'>
                            <div class='card' style='width: 18rem; border-radius: 15px;'>
                                <div class='card-body'>
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
                                        <button  type='submit' class='btn btn-danger'  formaction='phpCode/details.php' name='add'> + ADD
                                            
                                            
                                        </div>
                                    </div>
            
                                </div>
            
            
                            </div>
                        </div>";
            } ?>


        </div>
    </div>

    </div>
    <script src="owljs/jquery.min.js" type="text/javascript"></script>
    <script src="owljs/owl.carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>