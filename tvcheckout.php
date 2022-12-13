<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
$id = $_GET['rn'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif}
    </style>
</head>
<body class="w3-content" style="max-width:1200px; background-color:lightgrey">

    <!-- Sidebar/menu -->
    

    <!-- Top menu on small screens -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
        <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:250px">

        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top:83px"></div>

        <!-- Top header -->
        <header class="w3-container w3-xlarge">

            <p class="w3-left">
                Checkout
            </p>
            <p class="w3-right">
                <i class="fa fa-shopping-cart w3-margin-right"></i>
                <i class="fa fa-search"></i>
            </p>
        </header>

        <!-- Image header -->
        <div class="w3-display-container w3-container">

            <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">

                <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>


            </div>
        </div>

        <div class="w3-container w3-text-grey" id="jeans"></div>


        <!-- Footer -->
        <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
            <div class="w3-row-padding">
                <div class="w3-col s4">
                    <h4>Shipping/Card Details</h4>
                    <?php
                    if(isset($_POST['purchase'])){
                        require('db.php');
                        $products = "DELETE FROM tv WHERE id = '$id'";
                        $result = mysqli_query($con, $products);
                        header("Location: checkoutsuccess.php");
                    }
                    ?>
                   
                    <form method ="POST">
                        <p>
                            First Name
                            <input class="w3-input w3-border" type="text" placeholder="First Name" name="FirstName" required />
                        </p>
                        <p>
                            Last Name
                            <input class="w3-input w3-border" type="text" placeholder="Last Name" name="LastName" required />
                        </p>
                        <p>
                            Address Line 1
                            <input class="w3-input w3-border" type="text" placeholder="Address Line 1" name="AL1" required />
                        </p>
                        <p>
                            Address Line 2
                            <input class="w3-input w3-border" type="text" placeholder="Address Line 2" name="AL2" required />
                        </p>
                        <p>
                            City
                            <input class="w3-input w3-border" type="text" placeholder="City" name="City" required />
                        </p>
                        <p>
                            State
                            <input class="w3-input w3-border" type="text" placeholder="State" name="State" required />
                        </p>
                        <p>
                            Zip Code
                            <input class="w3-input w3-border" type="text" placeholder="Zip Code" name="Zip" required />
                        </p>
                        <p>
                            Card Number
                            <input class="w3-input w3-border" type="text" placeholder="Card Number" name="CN" required />
                        </p>
                        <p>
                            CVV
                            <input class="w3-input w3-border" type="text" placeholder="CVV" name="CVV" required />
                        </p>
                        <button type="submit" value="purchase" name="purchase" class="w3-button w3-block w3-black">Purchase</button>
                    </form>
                </div>

                <div class="w3-col s4">
                    <h4>About</h4>
                    <?php
                    require('db.php');
                    $products = "SELECT * FROM tv WHERE id = '$id'";
                    $result = mysqli_query($con, $products);
                    $row = $result->fetch_assoc();

                    ?>
                    <div class="col-md-20 mt-3">
                        <div class="border p-2">
                            <h3>
                                <?= $row['Brand']; ?>
                            </h3>
                            <h3>
                                <?= "Size: " . $row['ScreenSize'] . " inch" ?>
                            </h3>
                            <h3>
                                <?= "Resolution: " . $row['Resolution'] ?>
                            </h3>
                            <h3>
                                <?= $row['Year']; ?>
                            </h3>
                            
                        </div>
                    </div>
                    <?php

                    ?>
                </div>
                <div class="w3-col s4">
                    <h4>Price</h4>
                    <?php
                    require('db.php');
                    $products = "SELECT * FROM tv WHERE id = '$id'";
                    $result = mysqli_query($con, $products);
                    $row = $result->fetch_assoc();

                    ?>
                    <div class="col-md-20 mt-3">
                        <div class="border p-2">
                            
                            <h3>
                                <?= "$" . $row['Price']; ?>
                            </h3>
                        </div>
                    </div>
                    <?php

                    ?>
                </div>
                
            </div>
        </footer>

        <div class="w3-black w3-center w3-padding-24">
            Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a>
        </div>

        <!-- End page content -->
    </div>

    <!-- Newsletter Modal -->
    <div id="newsletter" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
            <div class="w3-container w3-white w3-center">
                <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                <h2 class="w3-wide">NEWSLETTER</h2>
                <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
                <p>
                    <input class="w3-input w3-border" type="text" placeholder="Enter e-mail" />
                </p>
                <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
            </div>
        </div>
    </div>

    <script>
// Accordion
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
    </script>

</body>
</html>