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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
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
        <div class="container">
            <div class="row">




                <div class="col-md-8">
                    <form action="post">
                        <div class="row animated slideInLeft" style="animation-delay:0.6s;">
                            <div class="col-md-5 mx-auto">
                                <div class="card" style="border-radius:15px; background-color:darkslategrey; color:#fff;">
                                    <center>
                                        <h5>Select Time for Service</h5>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div id="times">
                            <div class="row animated zoomIn" style="animation-delay:1s;">

                                <div class="col-md-3">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="9.30 AM">
                                        9.30 AM
                                    </button>

                                </div>
                                <div class="col-md-3">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="10.30 AM">
                                        10.30 AM
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="11.30 AM">
                                        11.30 AM
                                    </button>

                                </div>
                                <div class="col-md-3">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="12.30 AM">
                                        12.30 AM
                                    </button>

                                </div><br>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="1.30 PM">
                                        1.30 PM
                                    </button>

                                </div>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="2.30 PM">
                                        2.30 PM
                                    </button>

                                </div>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="3.30 PM">
                                        3.30 PM
                                    </button>

                                </div>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="4.30 PM">
                                        4.30 PM
                                    </button>

                                </div>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="5.30 PM">
                                        5.30 PM
                                    </button>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="6.30 PM">
                                        6.30 PM
                                    </button>

                                </div>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="7.30 PM">
                                        7.30 PM
                                    </button>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="8.30 PM">
                                        8.30 PM
                                    </button>
                                </div>



                            </div>
                        </div>


                        <div class="row mt-5">

                            <div class="col-md-3" style="font-size:18px; font-weight:500;">Appointment Time</div>

                            <div class="col-md-2" style="align-content:center;">
                                <input name="t1" style="border-radius:15px; text-align:center; width:100px;" type="text" id="name1">
                            </div>
                            <div class="col-md-3" style="font-size:18px; font-weight:500;">Appointment Day</div>

                            <div class="col-md-2" style="align-content:center;">
                                <input name="t2" style="border-radius:15px; text-align:center; width:140px;" type="text" id="name">
                            </div>
                        </div>


                        <div class="row mt-5 justify-content-md-center">

                            <button type="submit" formaction="book.php" class="btn btn-dark" name="book" style="width:250px;border-radius:25px;">Book Services
                        </div>
                    </form>
                </div>


                <div class="col-md-4">
                    <div id="buttons">
                        <div class="row animated slideInRight" style="animation-delay:1.8s;">
                            <div class="col-md-8 mx-auto">
                                <div class="card" style="border-radius:15px; background-color:darkslategrey; color:#fff;">
                                    <center>
                                        <h5>Select Date for Service</h5>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="row animated zoomIn" style="animation-delay:2.0s;">

                            <div class="col-md-6 mx-auto">

                                <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="<?php $date = new DateTime('+1 day');
                                                                                                                                                                                                echo $date->format('d-m-Y'); ?>">
                                    <?php
                                    $date = new DateTime('+1 day');
                                    echo $date->format('d-m-Y');
                                    ?>
                                </button>
                            </div>


                        </div>
                        <div class="row animated zoomIn mt-2" style="animation-delay:2.0s;">

                            <div class="col-md-6 mx-auto">

                                <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="<?php $date = new DateTime('+2 day');
                                                                                                                                                                                                echo $date->format('d-m-Y'); ?>">
                                    <?php
                                    $date = new DateTime('+2 day');
                                    echo $date->format('d-m-Y');
                                    ?>
                                </button>
                            </div>
                        </div>
                        <div class="row animated zoomIn mt-2" style="animation-delay:2.0s;">
                            <div class="col-md-6 mx-auto">

                                <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="<?php $date = new DateTime('+3 day');
                                                                                                                                                                                                echo $date->format('d-m-Y'); ?>">
                                    <?php
                                    $date = new DateTime('+3 day');
                                    echo $date->format('d-m-Y');
                                    ?>
                                </button>


                            </div>
                        </div>
                        <div class="row animated zoomIn mt-2" style="animation-delay:2.0s;">
                            <div class="col-md-6 mx-auto">

                                <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="<?php $date = new DateTime('+4 day');
                                                                                                                                                                                                echo $date->format('d-m-Y'); ?>">
                                    <?php
                                    $date = new DateTime('+4 day');
                                    echo $date->format('d-m-Y');
                                    ?>
                                </button>

                            </div>
                        </div>
                        <div class="row animated zoomIn mt-2" style="animation-delay:2.0s;">
                            <div class="col-md-6 mx-auto">
                                <button type=" submit" class="btn-work" style="color:black; font-size:20px; text-decoration:none; border-radius:30px; width:120px; text-align: center;" value="<?php $date = new DateTime('+5 day');
                                                                                                                                                                                                echo $date->format('d-m-Y'); ?>">

                                    <?php
                                    $date = new DateTime('+5 day');
                                    echo $date->format('d-m-Y');
                                    ?>
                                </button>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <script>
        times.addEventListener('click', event => {
            event.preventDefault();
            document.getElementById("name1").value = event.target.value;
            console.log(event.target.value);
        });

        buttons.addEventListener('click', event => {
            event.preventDefault();
            document.getElementById("name").value = event.target.value;
            console.log(event.target.value);
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>