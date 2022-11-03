<!DOCTYPE html>
<html>
<head>
<title>TV's</title>
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
</head>
<body class="w3-content" style="max-width:1200px; background-color:lightgrey">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Products</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="dashboard.php" class="w3-bar-item w3-button">Go Back</a>
    <a href="TVs.php" class="w3-bar-item w3-button">Update Search</a>
    <a href="TVs.php" class="w3-bar-item w3-button">TV's</a>
    
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      TV Sreen Size <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">32 inches</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">43 inches</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">55 inches</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">65 inches</label><br>
    </div>

    <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Resolution <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">8k</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">4k</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">1080p</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">720p</label><br>
    </div>

    <a onclick="myAccFunc3()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Model Year <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc3" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">2022</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">2021</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">2020</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">2019</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">2018</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">2017</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">2016 and Older</label><br>
    </div>

    <a onclick="myAccFunc4()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Price <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc4" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">100 or less</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">100-200</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">200-300</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">300-400</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">400-500</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">500-600</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">600+</label><br>
    </div>

    <a onclick="myAccFunc5()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Brands <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc5" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">TLC</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">Samsung</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">Insignia</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">Sony</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">Visio</label><br>
      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
      <label for="vehicle1">LG</label><br>
    </div>

    <a href="Computers.php" class="w3-bar-item w3-button">Computers</a>
    <a href="#" class="w3-bar-item w3-button">Video Games</a>
    <a href="#" class="w3-bar-item w3-button">Sound</a>
    <a href="#" class="w3-bar-item w3-button">Photography</a>
    <a href="#" class="w3-bar-item w3-button">Cell Phones</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
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
    
    <p class="w3-left">Welcome to the TV Page</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
    

  </header>

  <div class="w3-black w3-center w3-bottom w3-padding-24">Enjoy your TV :D<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></div>

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
function myAccFunc2() {
  var x = document.getElementById("demoAcc2");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc3() {
  var x = document.getElementById("demoAcc3");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc4() {
  var x = document.getElementById("demoAcc4");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc5() {
  var x = document.getElementById("demoAcc5");
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