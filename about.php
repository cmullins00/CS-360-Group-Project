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
    <title>About Us</title>
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

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16">
            <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
            <h3 class="w3-wide">
                <b>Products</b>
            </h3>
        </div>
        <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
            <a href="dashboard.php" class="w3-bar-item w3-button">Go Back</a>
            <a href="TVs.php" class="w3-bar-item w3-button">TVs</a>
            <a href="Computers.php" class="w3-bar-item w3-button">Computers</a>
            <a href="VideoGames.php" class="w3-bar-item w3-button">Video Games</a>
            <a href="Photography.php" class="w3-bar-item w3-button">Photography</a>
            <a href="CellPhones.php" class="w3-bar-item w3-button">Cell Phones</a>
            <a href="internet.php" class="w3-bar-item w3-button">Internet Service</a>
        </div>
    </nav>

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
                Welcome to the About Page
            </p>
            <p class="w3-right">
                <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
                <i class="fa fa-shopping-cart w3-margin-right"></i>
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
            <div class="w3-row-padding row">
                <h2>About Us</h2>
            </div>
            <div class="w3-left-align w3-margin">
                <h4>
                    This is where a customer can learn more about our company.
                </h4>
                <br>
                <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla.
                    Metus dictum at tempor commodo. Sollicitudin nibh sit amet commodo nulla. Sed euismod nisi porta lorem mollis aliquam. Nunc sed id semper risus in hendrerit. Lobortis mattis aliquam faucibus 
                    purus in massa tempor nec feugiat. Magna fringilla urna porttitor rhoncus dolor purus. Orci ac auctor augue mauris augue. Id aliquet risus feugiat in ante.
                </h4>
                <br>
                <h4>
                    Donec pretium vulputate sapien nec. Neque viverra justo nec ultrices. At volutpat diam ut venenatis tellus in metus. Turpis massa tincidunt dui ut. Volutpat ac tincidunt vitae semper quis 
                    lectus nulla at volutpat. Donec adipiscing tristique risus nec. Vitae tortor condimentum lacinia quis vel eros. Nibh tortor id aliquet lectus proin nibh nisl condimentum. Massa ultricies mi
                    quis hendrerit dolor magna eget est lorem. Amet purus gravida quis blandit. Dapibus ultrices in iaculis nunc sed. Lacus suspendisse faucibus interdum posuere lorem ipsum. Semper risus in 
                    hendrerit gravida rutrum quisque non. Lectus urna duis convallis convallis. Diam ut venenatis tellus in metus vulputate eu scelerisque felis. Ut porttitor leo a diam sollicitudin tempor. Nunc
                    congue nisi vitae suscipit tellus mauris. Tellus molestie nunc non blandit. Ornare arcu dui vivamus arcu.
                </h4>
                <br>
                <h4>
                    Scelerisque eu ultrices vitae auctor eu augue ut. Eget sit amet tellus cras adipiscing enim eu. Est ultricies integer quis auctor. Sed augue lacus viverra vitae congue eu consequat ac felis.
                    Amet porttitor eget dolor morbi non arcu risus. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Aliquet enim tortor at auctor urna nunc id cursus metus. Risus nec feugiat in 
                    fermentum posuere. Venenatis tellus in metus vulputate eu. Donec massa sapien faucibus et molestie ac feugiat sed lectus. Sed vulputate odio ut enim blandit volutpat maecenas volutpat. 
                    Laoreet sit amet cursus sit amet dictum sit amet justo.
                </h4>
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