<?php


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

    <title>Hello, world!</title>




</head>

<body>

    <!-- Navigation -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">

            <a class="navbar-brand" href="../index.php" style="font-family: 'Pacifico', cursive;
        font-size: 32px; font-weight:bolder; color:#fff;">
                <img src="../Source/hairdresser%20(1).png" width="50" height="40" style="margin-top:-10px;" /> SalonSeat</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">

                        <a class="nav-link" href="../index.php" class="btn btn-info" style="font-weight:600; font-size:20px; color:white;">
                            Home
                        </a>


                    </li>
                </ul>
                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" href="redirect.php" style="text-decoration:none;">
                            <h5 style="color:white; text-decoration:none;">Login</h5>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div>
        <center>
            <h3 class="mt-2 animated slideInLeft" style="color:darkred; animation-delay:0.8s; font-weight:700;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 mx-auto">
                            <p class="card" style="border-radius:15px; background-color:darkslategrey; color:#fff; padding:10px;font-size:18px;">
                                <?php
                                $a = $_GET['a'];
                                echo $a;
                                ?>
                            </p>

                        </div>
                    </div>
                </div>

            </h3>
        </center>

    </div>


    <div class="container-fluid">
        <div class="row mt- mb-5 animated slideInUp" style="animation-delay:1.8s;">


            <?php


            $a = $_GET['a'];
            $b = $_GET['b'];

            $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
            $select = "SELECT `serviceNo`, `serviceUserPhoneNo`, `serviceName`, `servicePrice`, `serviceFor`, `serviceType`, `salonName` FROM `services` WHERE `serviceType`='$a' and `serviceFor`='$b';";
            $response =  mysqli_query($connect, $select);



            while ($row = mysqli_fetch_array($response)) {

                echo "<div class='col-md 3'>
                <form method='post'>
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
                                        <button  type='submit' class='btn btn-danger'  formaction='./redirect.php' name='addLogin'>+ Add
                                            
                                        </div>
                                    </div>
            
                                </div>
            
            
                            </div></form>
                        </div>";
            } ?>


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