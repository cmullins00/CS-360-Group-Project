<?php
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
<html lang="en">
<head>
    <title>Photography</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
        <h3 class="w3-wide"><b>Products</b></h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <a href="dashboard.php" class="w3-bar-item w3-button">Go Back</a>
        <a type="button" class="w3-bar-item w3-button" onclick="submitForms()" id="sub">Search</a>

        <a href="Photography.php" class="w3-bar-item w3-button">Reset Search</a>
    
        <form action="" method="GET" id="box1">

        <!-- Name Checkboxes -->
        <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Name <i class="fa fa-caret-down"></i> </a>

        <div id="demoAcc" class="w3-bar-block w3-show w3-padding-large w3-medium">
            <?php
            require('db.php');

            $name_query = "SELECT DISTINCT Name FROM cameras";
            $name_query_run = mysqli_query($con, $name_query);

            if (mysqli_num_rows($name_query_run) > 0)
            {
                $checked = [];

                foreach($name_query_run as $namelist)
                {
                    if(isset($_GET['names']))
                    {
                        $checked = $_GET['names'];
                    }
                    ?>
                        <div>
                            <input type="checkbox" name="names[]" id="1" value="<?= $namelist['Name']; ?>"
                                <?php if(in_array($namelist['Name'], $checked)){ echo "checked"; } ?>
                            />
                            <?= $namelist['Name']; ?>
                        </div>
                    <?php
                }
            }
            else 
            { 
              echo "No Options"; 
            }
            ?>
      
        </div>

        <!-- Megapixels Checkboxes -->
        <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Megapixels <i class="fa fa-caret-down"></i> </a>

        <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <?php
            require('db.php');

            $query = "SELECT DISTINCT Megapixels FROM cameras ORDER BY Megapixels DESC";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $list)
                {
                    $checked = [];
                    if(isset($_GET['pixels']))
                    {
                        $checked = $_GET['pixels'];
                    }
                    ?>
                        <div>
                            <input type="checkbox" name="pixels[]" id="1" value="<?= $list['Megapixels']; ?>"
                                <?php if(in_array($list['Megapixels'], $checked)){ echo "checked"; } ?>
                            />
                            <?= $list['Megapixels']; ?>
                        </div>
                    <?php
                }
            }
            else 
            { 
              echo "No Options"; 
            }
            ?>
      
        </div>

        <!-- Max Aperature Checkboxes -->
        <a onclick="myAccFunc3()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Max Aperature <i class="fa fa-caret-down"></i> </a>

        <div id="demoAcc3" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <?php
            require('db.php');

            $query = "SELECT DISTINCT MaxAperture FROM cameras ORDER BY MaxAperture DESC";
            $query_run = mysqli_query($con, $query);

        
            if (mysqli_num_rows($query_run) > 0)
            {
            
            
                foreach($query_run as $list)
                {
                    $checked = [];
                    if(isset($_GET['aperatures']))
                    {
                        $checked = $_GET['aperatures'];
                    }
                    ?>
                        <div>
                            <input type="checkbox" name="aperatures[]" id="1" value="<?= $list['MaxAperture']; ?>"
                                <?php if(in_array($list['MaxAperture'], $checked)){ echo "checked"; } ?>
                            />
                            <?= $list['MaxAperture']; ?>
                        </div>
                    <?php
                }
            }
            else 
            { 
              echo "No Options"; 
            }
            ?>
      
        </div>

   
        <!-- Video Resolution Checkboxes -->
        <a onclick="myAccFunc4()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Video Resolution <i class="fa fa-caret-down"></i> </a>

        <div id="demoAcc4" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <?php
            require('db.php');

            $query = "SELECT DISTINCT VideoResolution FROM cameras";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $list)
                {
                    $checked = [];
                    if(isset($_GET['ress']))
                    {
                        $checked = $_GET['ress'];
                    }
                    ?>
                        <div>
                            <input type="checkbox" name="ress[]" value="<?= $list['VideoResolution']; ?>"
                                <?php if(in_array($list['VideoResolution'], $checked)){ echo "checked"; } ?>
                            />
                            <?= $list['VideoResolution']; ?>
                        </div>
                    <?php
                }
            }
            else 
            { 
              echo "No Options"; 
            }
            ?>
        </div>

        <!-- Brand Checkboxes -->
        <a onclick="myAccFunc5()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Brand <i class="fa fa-caret-down"></i></a>

        <div id="demoAcc5" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <?php
            require('db.php');

            $brand_query = "SELECT DISTINCT Brand FROM cameras";
            $brand_query_run = mysqli_query($con, $brand_query);

            if (mysqli_num_rows($brand_query_run) > 0)
            {
                foreach($brand_query_run as $brandlist)
                {
                    $checked = [];
                    if(isset($_GET['brands']))
                    {
                        $checked = $_GET['brands'];
                    }
                    ?>
                        <div>
                            <input type="checkbox" name="brands[]" value="<?= $brandlist['Brand']; ?>"
                                <?php if(in_array($brandlist['Brand'], $checked)){ echo "checked"; } ?>
                            />
                            <?= $brandlist['Brand']; ?>
                        </div>
                    <?php
                }
            }
            else 
            { 
              echo "No Options"; 
            }
            ?>
        </div>

        <!-- Price Checkboxes -->
        <a onclick="myAccFunc6()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Price <i class="fa fa-caret-down"></i> </a>

        <div id="demoAcc6" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <?php
            require('db.php');

            $checked = array("3001", "3000", "2500", "2000", "1500", "1000", "500");
                foreach($checked as $pricelist)
                {
                    ?>
                        <div>
                            <?php
                            if ($pricelist < 3001){
                                ?>
                                <input type="checkbox" name="prices[]" value="<?= $pricelist; ?>"
                                />
                                $<?= $pricelist . " or less"; ?>
                                <?php
                            }
                            else
                            {
                                ?>
                                <input type="checkbox" name="prices[]" value="<?= $pricelist; ?>"
                                />
                                $<?= $pricelist . " or more"; ?>
                                <?php
                            }
                        ?>
                        </div>
                    <?php
                }
            ?>
        </div>
        </form>
    
        <a href="TVs.php" class="w3-bar-item w3-button">TVs</a>
        <a href="Computers.php" class="w3-bar-item w3-button">Computers</a>
        <a href="VideoGames.php" class="w3-bar-item w3-button">Video Games</a>
        <a href="CellPhones.php" class="w3-bar-item w3-button">Cell Phones</a>
    </div>
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
    <div class="w3-hide-large" style="margin-top:83px, margin-bottom:83px"></div>
  
    <!-- Top header -->
    <header class="w3-container w3-xlarge">
    
    <p class="w3-left">Welcome to the Photography Page</p>
    <p class="w3-right">
        <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
        <i class="fa fa-shopping-cart w3-margin-right"></i>
        <i class="fa fa-search"></i>
    </p>
    

    </header>

    <div class = "col-md-12 mt-3">
        <div class="card mt-3">
            <div class="card-body row row-cols-lg-4">
                <?php
                    require('db.php');

                    $result = [];
                    $result2 = [];

                    $temp1 = [];
                    $temp2 = [];
                    $temp3 = [];
                    $temp4 = [];
                    $temp5 = [];
                    $temp6 = [];

                    $similarPrices = [];

                    if(isset($_GET['names']))
                    {
                        $namechecked = [];
                        $namechecked = $_GET['names'];
                    }
                    else
                    {
                        $namechecked[0] = 0;
                    }

                    if(isset($_GET['pixels']))
                    {
                        $pixelchecked = [];
                        $pixelchecked = $_GET['pixels'];
                    }
                    else
                    {
                        $pixelchecked[0] = 0;
                    }

                    if(isset($_GET['apertures']))
                    {
                        $aperturechecked = [];
                        $aperturechecked = $_GET['apertures'];
                    }
                    else
                    {
                        $aperturechecked[0] = 0;
                    }

                    if(isset($_GET['ress']))
                    {
                        $reschecked = [];
                        $reschecked = $_GET['ress'];
                    }
                    else
                    {
                        $reschecked[0] = 0;
                    }

                    if(isset($_GET['brands']))
                    {
                        $brandchecked = [];
                        $brandchecked = $_GET['brands'];
                    }
                    else
                    {
                        $brandchecked[0] = 0;
                    }

                    if(isset($_GET['prices']))
                    {
                        $pricechecked = [];
                        $pricechecked = $_GET['prices'];
                    }
                    else
                    {
                        $pricechecked[0] = 0;
                    }

                    foreach($namechecked as $row)
                    {
                        if($row != 0){
                            $products = "SELECT * FROM cameras WHERE (Name = '$row') ORDER BY Price DESC;";
                            $products_run = mysqli_query($con, $products);
                        }
                        else
                        {
                            $products = "SELECT * FROM cameras ORDER BY Price DESC";
                            $products_run = mysqli_query($con, $products);
                        }

                        if(mysqli_num_rows($products_run) > 0)
                        {
                            foreach($products_run as $prodsize) :
                                array_push($temp1, $prodsize);
                            endforeach;
                        }
                    }

                    foreach($pixelchecked as $row)
                    {
                        if($row != 0){
                            $products = "SELECT * FROM cameras WHERE (Megapixels = '$row') ORDER BY Price DESC;";
                            $products_run = mysqli_query($con, $products);
                        }
                        else
                        {
                            $products = "SELECT * FROM cameras ORDER BY Price DESC";
                            $products_run = mysqli_query($con, $products);
                        }

                        if(mysqli_num_rows($products_run) > 0)
                        {
                            foreach($products_run as $prodsize) :
                                array_push($temp2, $prodsize);
                            endforeach;
                        }
                    }

                    foreach($aperturechecked as $row)
                    {
                        if($row != 0){
                            $products = "SELECT * FROM cameras WHERE (MaxAperture = '$row') ORDER BY Price DESC;";
                            $products_run = mysqli_query($con, $products);
                        }
                        else
                        {
                            $products = "SELECT * FROM cameras ORDER BY Price DESC";
                            $products_run = mysqli_query($con, $products);
                        }

                        if(mysqli_num_rows($products_run) > 0)
                        {
                            foreach($products_run as $prodsize) :
                                array_push($temp3, $prodsize);
                            endforeach;
                        }
                    }

                    foreach($reschecked as $row)
                    {
                        if($row != 0){
                            $products = "SELECT * FROM cameras WHERE (VideoResolution = '$row') ORDER BY Price DESC;";
                            $products_run = mysqli_query($con, $products);
                        }
                        else
                        {
                            $products = "SELECT * FROM cameras ORDER BY Price DESC";
                            $products_run = mysqli_query($con, $products);
                        }

                        if(mysqli_num_rows($products_run) > 0)
                        {
                            foreach($products_run as $prodsize) :
                                array_push($temp4, $prodsize);
                            endforeach;
                        }
                    }

                    foreach($brandchecked as $row)
                    {
                        if($row != 0){
                            $products = "SELECT * FROM cameras WHERE (Brand = '$row') ORDER BY Price DESC;";
                            $products_run = mysqli_query($con, $products);
                        }
                        else
                        {
                            $products = "SELECT * FROM cameras ORDER BY Price DESC";
                            $products_run = mysqli_query($con, $products);
                        }

                        if(mysqli_num_rows($products_run) > 0)
                        {
                            foreach($products_run as $prodsize) :
                                array_push($temp5, $prodsize);
                            endforeach;
                        }
                    }

                    foreach($pricechecked as $row)
                    {
                        if($row != 0)
                        {
                            if ($row <= 3000)
                            {
                                $products = "SELECT * FROM cameras WHERE (Price <= '$row') ORDER BY Price DESC;";
                                $products_run = mysqli_query($con, $products);
                            }
                            else 
                            {
                                $products = "SELECT * FROM cameras WHERE (Price >= '$row') ORDER BY Price DESC;";
                                $products_run = mysqli_query($con, $products);
                            }

                            $extraProducts = "SELECT * FROM cameras WHERE ((Price <= ('$row' + 500) AND Price > '$row')) ORDER BY Price DESC;";
                            $extraProducts_run = mysqli_query($con, $extraProducts);
                        }
                        else
                        {
                            $extraProducts = "SELECT * FROM cameras ORDER BY Price DESC;";
                            $extraProducts_run = mysqli_query($con, $extraProducts);
                        }

                        if(mysqli_num_rows($products_run) > 0)
                        {
                            foreach($products_run as $prodsize) :
                                array_push($temp6, $prodsize);
                            endforeach;
                        }

                        if(mysqli_num_rows($extraProducts_run) > 0)
                        {
                            foreach($extraProducts_run as $prodsize) :
                                array_push($similarPrices, $prodsize);
                            endforeach;
                        }
                    }



                    $result = array_map("unserialize", array_intersect(array_map("serialize", $temp1), array_map("serialize", $temp2), array_map("serialize", $temp3), array_map("serialize", $temp4), array_map("serialize", $temp5), array_map("serialize", $temp6)));
                    $result2 = array_map("unserialize", array_intersect(array_map("serialize", $temp1), array_map("serialize", $temp2), array_map("serialize", $temp3), array_map("serialize", $temp4), array_map("serialize", $temp5), array_map("serialize", $similarPrices)));

                    if(!empty($result)){
                        foreach($result as $proditems) :
                                ?>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <h6><?= $proditems['Brand']; ?></h6>
                                            <h6><?= $proditems['Name']; ?></h6>
                                            <h6><?= "Megapixels: " . $proditems['Megapixels']; ?></h6>
                                            <h6><?= "Max Aperature: " . $proditems['MaxAperture']; ?></h6>
                                            <h6><?= "Video Resolution: " . $proditems['VideoResolution']; ?></h6>
                                            <h6><?= "Price: $" . $proditems['Price']; ?></h6>
                                            <h6><a href = 'checkout.php?rn=<?=$proditems['id']?>'>Purchase Item</a></h6>
                                        </div>
                                    </div>
                                <?php
                        endforeach;

                        $result2 = array_map("unserialize", array_unique(array_map("serialize", $result2)));

                        $extra = array_map("unserialize", array_diff(array_map("serialize", $result2), array_map("serialize", $result)));

                        ?>
                        </div>
                        <div class="card-body row row-cols-lg-4">
                        <?php

                        if (!empty($extra)){
                            ?>

                            <hr>
                            <h2>Similar Prices</h2>
                            <hr>
                            <?php

                            foreach($extra as $proditems) :
                                ?>
                                    <div class="col-md-4 mt-3">
                                        <div class="border p-2">
                                            <h6><?= $proditems['Brand']; ?></h6>
                                            <h6><?= $proditems['Name']; ?></h6>
                                            <h6><?= "Megapixels: " . $proditems['Megapixels']; ?></h6>
                                            <h6><?= "Max Aperature: " . $proditems['MaxAperture']; ?></h6>
                                            <h6><?= "Video Resolution: " . $proditems['VideoResolution']; ?></h6>
                                            <h6><?= "Price: $" . $proditems['Price']; ?></h6>
                                            <h6><a href = 'checkout.php?rn=<?=$proditems['id']?>'>Purchase Item</a></h6>
                                        </div>
                                    </div>
                                <?php
                            endforeach;
                        }
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
                ?>
            </div>
        </div>
    </div>

  <div class="w3-black w3-left w3-left w3-bottom w3-padding-16"><a style="margin-left: 200px">Enjoy your Camera :D</a></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  // Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", " w3-hide");
    }
}

function myAccFunc2() {
    var x = document.getElementById("demoAcc2");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", " w3-hide");
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

function myAccFunc6() {
    var x = document.getElementById("demoAcc6");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function submitForms(){
    $('#box1').submit();
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