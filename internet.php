<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Internet Service</title>
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
            <a href="TVs.php" class="w3-bar-item w3-button">TV's</a>
            <a href="Computers.php" class="w3-bar-item w3-button">Computers</a>
            <a href="#" class="w3-bar-item w3-button">Video Games</a>
            <a href="#" class="w3-bar-item w3-button">Sound</a>
            <a href="#" class="w3-bar-item w3-button">Photography</a>
            <a href="#" class="w3-bar-item w3-button">Cell Phones</a>
            <a href="internet.php" class="w3-bar-item w3-button">Internet Service</a>
        </div>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a>
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
                Welcome to the Internet Service Page
            </p>
            <p class="w3-right">
                <a href="login.php" class="w3-bar-item w3-button">Log Out</a>
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

        <!-- Product grid -->


        <!-- Subscribe section -->
        

        <!-- Footer -->
        
        <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
            <div class="w3-row-padding row">
                <h3>Input Number of Devices</h3>
                <form class="form" action="" method="post">                    
                    <label for="Computers/Laptops">Computers/Laptops:</label><br />
                    <input type="number" class="login-input" name="Computers" id="Computers" min="0" max="100" required /><br />
                    <label for="Smartphones">Smartphones:</label><br />
                    <input type="number" class="login-input" name="Smartphones" min="0" max="100" required /><br />
                    <label for="Smart TV's">Smart TV's</label><br />
                    <input type="number" class="login-input" name="TV" min="0" max="100" required /><br />
                    <label for="Gaming Consoles">Gaming Consoles</label><br />
                    <input type="number" class="login-input" name="Consoles" min="0" max="100" required /><br />
                    <label for="Tablets">Tablets:</label><br />
                    <input type="number" class="login-input" name="Tablets" min="0" max="100" required /><br />
                    <input type="submit" name="submit" value="Submit" class="login-button" />                   
                </form>

                <?PHP
        if (isset($_POST['submit'])) { //to check if the form was submitted
            $Computers = $_POST['Computers'];
            $Smartphones = $_POST['Smartphones'];
            $TV = $_POST['TV'];
            $Consoles = $_POST['Consoles'];
            $Tablets = $_POST['Tablets'];
            $total = ($Computers * 10) + ($Smartphones * 5) + ($TV * 2) + ($Consoles * 10) + ($Tablets * 5);
            //print $Computers;

            require('db.php');

            $query = "SELECT * FROM internet WHERE bandwidth >= '$total'";
            $result = mysqli_query($con, $query);
            if(!empty($result))
            {
                foreach($result as $row) :
                ?>
                    <div class="col-md-5 mt-3">
                        <div class="card mt-3">
                                <hr />
                                    <h3><?= $row['name']; ?></h3>
                                    <h3><?= "Bandwidth: " . $row['bandwidth'] ?></h3>
                                    <h3><?= "Monthly Price: $" . $row['price'] ?></h3>
                                <hr />
                         </div>
                     </div>
                <?php
                endforeach;
                }
                else
                {
                ?>
                <div class="col-md-4 mt-3">
                    <div class="border p-2">
                        <h6>No Items Found</h6>
                    </div>
                </div>
                    <?php
                }
            }
            ?>
            </div>
        </footer>

        <div class="w3-black w3-center w3-padding-24"></div>

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