<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

if (!isset($_SESSION))
{
    session_start();
}

if (!isset($_SESSION['loggedIn']))
{
    header("Location: login.php");
    die;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thanks!</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif}
    </style>
</head>
<body class="w3-content" style="max-width:1200px; background-color:lightgrey">

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
    <div class="w3-main" style="margin-left:80px">

        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top:83px"></div>

        <!-- Image header -->
        <div class="w3-display-container w3-container">

            <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">

                <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>


            </div>
        </div>

        <div class="w3-container w3-text-grey" id="jeans"></div>

        <!-- Footer -->
        
        <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
            <div class="w3-row-padding row">
                <h1>Thank you for reaching out!</h1>
            </div>
            <div class="w3-center-align w3-margin">
                <h3>
                    Our team will get back to you as soon as we can.
                </h3>
            </div>
            <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
            <a href="dashboard.php" class="w3-bar-item w3-button">Go Back to Dashboard</a>
        </div>
        </footer>

        <div class="w3-black w3-center w3-padding-24"></div>

        <!-- End page content -->
    </div>

    <script>

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