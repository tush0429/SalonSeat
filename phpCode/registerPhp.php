<?php

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="owlcss/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="owlcss/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://localhost/PhpSalonSeat/Style/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SalonSeat</title>




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

    <div style="background-image:url('../Source/bg.jpg'); height:580px;">
        <div class="container">
            <form method="post" action="register.php">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card" style="border-radius: 50px 50px 50px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <center>
                                            <h3>Register</h3>
                                        </center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col">
                                        <label>Full Name</label>
                                        <div class="form-group">
                                            <input type="text" name="t1" style="border-radius: 55px;" class="form-control" placeholder="Full Name ">

                                        </div>
                                        <label>Phone Number</label>
                                        <div class="form-group">
                                            <input type="text" name="t2" style="border-radius: 55px;" class="form-control" placeholder="PhoneNumber ">

                                        </div>
                                        <label>Password</label>
                                        <div class="form-group">
                                            <input type="password" name="t3" style="border-radius: 55px;" class="form-control" placeholder="Password">

                                        </div>

                                        <br />
                                        <div class="form-group">
                                            <button type='submit' style="border-radius: 55px;" class="btn btn-dark btn-block btn-lg"> Login


                                        </div>



                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-5">
                                        <a href="redirect.php" style="text-decoration:none; color:black; font-size:16px; font-weight:600;">Already User? Login In</a>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="homepage.aspx"><< Back to Home</a><br><br>-->
                    </div>

                </div>
            </form>
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