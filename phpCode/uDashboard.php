<?php
require_once('AllFunction.php');
session_start();

$phoneNo = $_SESSION['uphno'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <link href="http://localhost/phpSalonSeat/owlcss/owl.carousel.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="http://localhost/phpSalonSeat/owlcss/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://localhost/PhpSalonSeat/Style/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>SalonSeat</title>
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


    <!-- Menu Navigation -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="margin-top:0px;">


            <ul class="navbar-nav">
                <li class="nav-item active">
                    <asp:HyperLink ID="HyperLink1" class="nav-link" runat="server" NavigateUrl="~/WebForm2.aspx">
                        <div class="card animated rotateInUpLeft" style="width: 7rem; padding:10px;  border-radius: 15px; animation-delay: 0.8s; background:#f1f1f1 ;  align-content:center;">
                            <img src="http://localhost/phpSalonSeat/Source/hair.png" width="40" height="50" style="padding:5px;" class="card-img-top" alt="...">
                            <div class="card-body" style="margin-bottom:-20px;margin-top:-20px;">
                                <p class="card-text">Men</p>
                            </div>
                        </div>
                    </asp:HyperLink>

                </li>
                <li class="nav-item">
                    <asp:LinkButton class="nav-link" ID="LinkButton2" runat="server">
                        <div class="card animated rotateInUpLeft" style="width: 8rem; padding:10px;border-radius: 15px; background:#f1f1f1 ; animation-delay: 1.0s; align-content:center;">
                            <img src="http://localhost/phpSalonSeat/Source/girlHair.png" width="40" height="50" style="padding:5px;" class="card-img-top" alt="...">
                            <div class="card-body" style="margin-bottom:-20px;margin-top:-20px;">
                                <p class="card-text">Women</p>
                            </div>
                        </div>
                    </asp:LinkButton>

                </li>
                <li class="nav-item">
                    <asp:LinkButton class="nav-link" ID="LinkButton3" runat="server">
                        <div class="card animated rotateInUpLeft" style="width: 7rem; padding:10px; border-radius: 15px; background:#f1f1f1 ; animation-delay: 1.3s; align-content:center;">
                            <img src="http://localhost/phpSalonSeat/Source/hairwash.png" width="40" height="50" style="padding:5px;" class="card-img-top" alt="...">
                            <div class="card-body" style="margin-bottom:-20px;margin-top:-20px;">
                                <p class="card-text">Wash</p>
                            </div>
                        </div>
                    </asp:LinkButton>

                </li>
                <li class="nav-item">
                    <asp:LinkButton class="nav-link" ID="LinkButton4" runat="server">
                        <div class="card animated rotateInUpLeft" style="width: 8rem; padding:10px; border-radius: 15px; background:#f1f1f1 ; animation-delay: 1.6s; align-content:center;">
                            <img src="http://localhost/phpSalonSeat/Source/makeup.png" width="40" height="50" style="padding:5px;" class="card-img-top" alt="...">
                            <div class="card-body" style="margin-bottom:-20px;margin-top:-20px;">
                                <p class="card-text">MakeUp</p>
                            </div>
                        </div>
                    </asp:LinkButton>

                </li>
                <li class="nav-item">
                    <asp:LinkButton class="nav-link" ID="LinkButton5" runat="server">
                        <div class="card animated rotateInUpLeft" style="width: 7rem; padding:10px; border-radius: 15px; background:#f1f1f1 ; animation-delay: 1.9s; align-content:center;">
                            <img src="http://localhost/phpSalonSeat/Source/hair.png" width="40" height="50" style="padding:5px;" class="card-img-top" alt="...">
                            <div class="card-body" style="margin-bottom:-20px;margin-top:-20px;">
                                <p class="card-text">Shave</p>
                            </div>
                        </div>
                    </asp:LinkButton>

                </li>

            </ul>

        </nav>
    </div>

    <!-- Menu Navigation -->


    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-8 ml-2">
                <h4>Top Rated Salon</h4>
            </div>
            <div class="offset-md-3">
                <button class="btn btn-info">View All</button>
            </div>
        </div>
        <div class="row mt-1 mb-3 animated slideInUp" style="animation-delay:2.5s;">
            <div class="owl-carousel owl-theme">


                <?php

                $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                $select = "SELECT * FROM `salondeatils`";
                $response =  mysqli_query($connect, $select);


                while ($row = mysqli_fetch_array($response)) {

                    echo "
                    <div class='col-md-3'>
                        <form method='post'>
                            <div class='card' style='width: 18rem; border-radius: 15px;'>
                                <img src='http://localhost/SalonSeat/v1/Images/$row[7]' width='120' height='180' style='border-radius: 15px;'class='card-img-top'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$row[1]</h5>
                                    <p class='card-text'>$row[4]</p>
                                    <div class='row'>
                                        <div class='col-4'>
                                        <input type='hidden' name='t1' value='$row[2]'>
                                        <button  type='submit' class='btn btn-success'  formaction='viewSalons.php' name='add'>View

                                        </div>
                                        <div class='col-2'>

                                        </div>
                                        <div class='col-6'>
                                            <p class='card-text'></p>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            </form>
                    </div>";
                }






                ?>






            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-2">
                <h4>Offers for Male</h4>
            </div>
            <div class="offset-md-3">
                <button class="btn btn-info">View All</button>
            </div>
        </div>
        <div class="row mt-1 mb-5">
            <div class="owl-carousel owl-theme">
                <?php

                $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                $select = "SELECT `offerNo`, `offerName`, `offerImage` FROM `offersmen` WHERE `gender`='Male';";
                $response =  mysqli_query($connect, $select);


                while ($row = mysqli_fetch_array($response)) {

                    echo "<div class='col-md 3'>
                      <div class='card' style='width: 18rem; border-radius: 15px;'>
                         <a href='viewOffers.php?a=$row[1]&b=Male'>
                         <img src='$row[2]' style='padding:0px; border-radius: 15px;' class='card-img-top'>
                    </a>
                
                    
                

            </div>
        </div>";
                }
                ?>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-2">
                <h4>Offers for Female</h4>
            </div>
            <div class="offset-md-3">
                <button class="btn btn-info">View All</button>
            </div>
        </div>
        <div class="row mt-1 mb-5">
            <div class="owl-carousel owl-theme">
                <?php

                $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
                $select = "SELECT `offerNo`, `offerName`, `offerImage` FROM `offersmen` WHERE `gender`='Female';";
                $response =  mysqli_query($connect, $select);


                while ($row = mysqli_fetch_array($response)) {

                    echo "<div class='col-md 3'>
                      <div class='card' style='width: 18rem; border-radius: 15px;'>
                         <a href='viewOffers.php?a=$row[1]&b=Female'>
                         <img src='$row[2]' style='padding:0px; border-radius: 15px;' class='card-img-top'>
                    </a>
                
                    
                

            </div>
        </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <!--
    <div class="container">
        <div class="row">
            <?php
            $connect = mysqli_connect('localhost', 'root', '', 'salonseat');
            $select = "SELECT * FROM `salondeatils`";
            $response =  mysqli_query($connect, $select);


            while ($row = mysqli_fetch_array($response)) {

                echo "
                <div class='col-md-4 mt-4'>
                    <div class='card' style='width: 18rem;'>
                        <img src='http://localhost/SalonSeat/v1/Images/$row[7]' height='150' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[1]</h5>
                            <p class='card-text'>$row[4]</p>
                            <a href='#' class='btn btn-danger'>Add +</a>
                        </div>
                    </div>
                </div>";
            }


            ?>

        </div>
    </div>

    -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="http://localhost/phpSalonSeat/owljs/jquery.min.js" type="text/javascript"></script>
    <script src="http://localhost/phpSalonSeat/owljs/owl.carousel.js" type="text/javascript"></script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>