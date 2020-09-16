<?php


function navbar($name)
{
  echo '<nav class="navbar navbar-expand-lg navbar-light bg-info ">
      
           <a class="navbar-brand" href="http://localhost/PhpSalonSeat/phpCode/uDashboard.php" style="font-size: 32px; font-weight:bolder; color:white;">
      <img src="http://localhost/phpSalonSeat/Source/hairdresser%20(1).png" width="50" height="40" style="margin-top:-10px;" /> SalonSeat</a>

 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      
      <a href="http://localhost/PhpSalonSeat/phpCode/uDashboard.php" class="btn btn-info" style="font-weight:600; font-size:20px;">Home</a>

      </li>
    </ul>
            <ul class="navbar-nav">
                  
            
            <li class="nav-item">

            <a href="MyCart.php" class="nav-link mt-1">
            <img src="http://localhost/phpSalonSeat/Source/shopping-cart.png" height="30">
            </a>
                            
            </li>
                        
            <li class="nav-item dropdown mt-2">
                <a href="class="nav-link mt-2 dropdown-toggle" style="color:white;margin-right:36px;text-decoration:none; font-size:28px;"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $name . '</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="MyCart.php"  class="dropdown-item" >MyCart</a>
                        <a href="reservation.php"  class="dropdown-item" >My Order</a>
                        <a href="redirect.php"  class="dropdown-item" >Logout</a>
                    </div>
            </li>

                        
                        
                    </ul>
      </div>
</nav>';
}
