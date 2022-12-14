<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
//$id = $_SESSION['id']

if (!isset($_SESSION))
{
    session_start();
}

if (!isset($_SESSION['loggedIn']))
{
    header("Location: vendorlogin.php");
    die;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Vendor Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif}
</style>

<style>
      table {
      border-collapse: collapse;
      width: 100%;
      color: black;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
      }
      th {
      background-color: black;
      color: white;
      }
      tr:nth-child(even) {background-color: #f2f2f2}
    </style>

</head>
<body class="w3-content" style="max-width:1200px; background-color:lightgrey">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>List a Product</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="TV_registration.php" class="w3-bar-item w3-button">TVs</a>
    <a href="Computer_registration.php" class="w3-bar-item w3-button">Computers</a>
    <a href="VideoGame_registration.php" class="w3-bar-item w3-button">Video Game Consoles</a>
    <a href="Photography_registration.php" class="w3-bar-item w3-button">Photography</a>
    <a href="Cellphone_registration.php" class="w3-bar-item w3-button">Cell Phones</a>
  </div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
 
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    
    <p class="w3-left">Welcome <?php echo $_SESSION['username']; ?> to Bone's Vendor Page</p>
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

  <div class="w3-container w3-text-grey" id="jeans">
    
  </div>

  <!-- Product grid -->
  

  <!-- Subscribe section -->
  <div class="w3-container w3-black w3-padding-32">
    

    <div class="w3-col s4">
                    <h4>Your Registered Products</h4>
                    <?php
                    require('db.php');

                    $name = $_SESSION['username'];
                    $id = "SELECT id FROM vendors WHERE username = '$name'";
                    $result = mysqli_query($con, $id);
                    $row = $result->fetch_assoc();
                    echo "Your VID # is: " . $row['id'];
                    $vid = $row['id'];

                    ?>
                      <div>
                        <h1 style="font-size: 30" >Your TVs</h1>
                      </div>
                    <?php
                    
                    $products = "SELECT * FROM tv WHERE vid = '$vid'";
                    $result = mysqli_query($con, $products);

                    foreach($result as $row) :
                      //$row = $prod->fetch_assoc();
                      ?>
                      
                        <div class="col-md-20 mt-3">
                        <div class="border p-2">
                            <hr>
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
                            <h3>
                                <?= "$" . $row['Price']; ?>
                            </h3>
                            <h3>
                              <td><a href = 'TV_delete.php?rn=<?php echo $row['id'] ?>'>Delete </a></td>
                            </h3>
                            <hr>
                            
                        </div>
                    </div>

                      <?php
                        endforeach;
                      ?>
                    <div>
                      <h1 style="font-size: 30" >Your Computers</h1>
                    </div>
                      <?php
                      $products = "SELECT * FROM computers WHERE vid = '$vid'";
                      $result = mysqli_query($con, $products);
                      
                      foreach($result as $row) :
                      //$row = $prod->fetch_assoc();
                      ?>
                        <div class="col-md-20 mt-3">
                        <div class="border p-2">
                            <hr>
                            <h3>
                                <?= $row['Brand']; ?>
                            </h3>
                            <h3>
                                <?= $row['Name']; ?>
                            </h3>
                            <h3>
                                <?= "Size: " . $row['ScreenSize'] . " inch" ?>
                            </h3>
                            <h3>
                                <?= "Resolution: " . $row['Resolution'] ?>
                            </h3>
                            <h3>
                                <?= "Ram: " . $row['Ram'] . "Gb"; ?>
                            </h3>
                            <h3>
                                <?= $row['StorageSize'] . "Gb " . $row['StorageType']; ?>
                            </h3>
                            <h3>
                                <?= "OS: " . $row['OS']; ?>
                            </h3>
                            <h3>
                                <?= "$" . $row['Price']; ?>
                            </h3>
                            <h3>
                              <td><a href = 'Computers_delete.php?rn=<?php echo $row['id'] ?>'>Delete </a></td>
                            </h3>
                            <hr>
                            
                        </div>
                    </div>

                      <?php
                        endforeach;
                      ?>
                    <div>
                      <h1 style="font-size: 30" >Your Cellphones</h1>
                    </div>
                    <?php
                      $products = "SELECT * FROM cellphones WHERE vid = '$vid'";
                      $result = mysqli_query($con, $products);
                      
                      foreach($result as $row) :
                      //$row = $prod->fetch_assoc();
                      ?>
                        <div class="col-md-20 mt-3">
                        <div class="border p-2">
                            <hr>
                            <h3>
                                <?= $row['Brand']; ?>
                            </h3>
                            <h3>
                                <?= $row['Name']; ?>
                            </h3>
                            <h3>
                                <?= "Size: " . $row['ScreenSize'] . " inch" ?>
                            </h3>
                            <h3>
                                <?= "LTE: " . $row['WirelessTech'] ?>
                            </h3>
                            <h3>
                                <?= "Ram: " . $row['Ram'] . "Gb"; ?>
                            </h3>
                            <h3>
                                <?= "Storage: " . $row['StorageSize'] . "Gb "; ?>
                            </h3>
                            <h3>
                                <?= "OS: " . $row['OS']; ?>
                            </h3>
                            <h3>
                                <?= "$" . $row['Price']; ?>
                            </h3>
                            <h3>
                              <td><a href = 'Cellphone_delete.php?rn=<?php echo $row['id'] ?>'>Delete </a></td>
                            </h3>
                            <hr>
                            
                        </div>
                    </div>

                      <?php
                        endforeach;
                      ?>


                    <div>
                      <h1 style="font-size: 30" >Your Cameras</h1>
                    </div>
                    <?php
                      $products = "SELECT * FROM cameras WHERE vid = '$vid'";
                      $result = mysqli_query($con, $products);
                      
                      foreach($result as $row) :
                      //$row = $prod->fetch_assoc();
                      ?>
                        <div class="col-md-20 mt-3">
                        <div class="border p-2">
                            <hr>
                            <h3>
                                <?= $row['Brand']; ?>
                            </h3>
                            <h3>
                                <?= $row['Name']; ?>
                            </h3>
                            <h3>
                                <?= $row['Megapixels'] . " Megapixels" ?>
                            </h3>
                            <h3>
                                <?= "Aperture: " . $row['MaxAperture'] ?>
                            </h3>
                            <h3>
                                <?= "Resolution: " . $row['VideoResolution']; ?>
                            </h3>
                            <h3>
                                <?= "$" . $row['Price']; ?>
                            </h3>
                            <h3>
                              <td><a href = 'Photography_delete.php?rn=<?php echo $row['id'] ?>'>Delete </a></td>
                            </h3>
                            <hr>
                            
                        </div>
                    </div>

                      <?php
                        endforeach;
                      ?>

                      <div>
                      <h1 style="font-size: 30" >Your Consoles</h1>
                    </div>
                    <?php
                      $products = "SELECT * FROM consoles WHERE vid = '$vid'";
                      $result = mysqli_query($con, $products);
                      
                      foreach($result as $row) :
                      //$row = $prod->fetch_assoc();
                      ?>
                        <div class="col-md-20 mt-3">
                        <div class="border p-2">
                            <hr>
                            <h3>
                                <?= $row['Name']; ?>
                            </h3>
                            <h3>
                                <?= "Output Resolution: " . $row['GraphicsQuality'] ?>
                            </h3>
                            <h3>
                                <?= "Ram: " . $row['Ram'] . "Gb"; ?>
                            </h3>
                            <h3>
                                <?= $row['StorageSize'] . "Gb " . $row['StorageType']; ?>
                            </h3>
                            <h3>
                                <?= "CPU Speed: " . $row['CpuPerformance']; ?>
                            </h3>
                            <h3>
                                <?= "$" . $row['Price']; ?>
                            </h3>
                            <h3>
                              <td><a href = 'VideoGame_delete.php?rn=<?php echo $row['id'] ?>'>Delete </a></td>
                            </h3>
                            <hr>
                            
                        </div>
                    </div>

                      <?php
                        endforeach;
                      ?>
                      
                    
                    <?php

                    ?>
      </div>
  </div>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
      <h4>Contact</h4>
      <p><a href="#">Contact Us</a></p>
      
        
      </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24"> </div>
      
  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
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