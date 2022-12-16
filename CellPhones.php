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
    <title>Cell Phones</title>
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

    <a href="cellphones.php" class="w3-bar-item w3-button">Reset Search</a>
    
    <form action="" method="GET" id="box1">

    <!-- Name Checkboxes -->
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Name <i class="fa fa-caret-down"></i> </a>

    <div id="demoAcc" class="w3-bar-block w3-show w3-padding-large w3-medium">
        <?php
        require('db.php');

        $name_query = "SELECT DISTINCT Name FROM cellphones";
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

    <!-- Screen Size Checkboxes -->
    <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Screen Size <i class="fa fa-caret-down"></i> </a>

    <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $query = "SELECT DISTINCT ScreenSize FROM cellphones ORDER BY ScreenSize DESC";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $list)
            {
                $checked = [];
                if(isset($_GET['sizes']))
                {
                    $checked = $_GET['sizes'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="sizes[]" id="1" value="<?= $list['ScreenSize']; ?>"
                            <?php if(in_array($list['ScreenSize'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $list['ScreenSize']; ?>
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

    <!-- Storage Size Checkboxes -->
    <a onclick="myAccFunc3()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Storage Size <i class="fa fa-caret-down"></i> </a>

    <div id="demoAcc3" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $query = "SELECT DISTINCT StorageSize FROM cellphones ORDER BY StorageSize DESC";
        $query_run = mysqli_query($con, $query);

        
        if (mysqli_num_rows($query_run) > 0)
        {
            
            
            foreach($query_run as $list)
            {
                $checked = [];
                if(isset($_GET['storages']))
                {
                    $checked = $_GET['storages'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="storages[]" id="1" value="<?= $list['StorageSize']; ?>"
                            <?php if(in_array($list['StorageSize'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $list['StorageSize']; ?>
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

    <!-- Ram Checkboxes -->
    <a onclick="myAccFunc6()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Ram <i class="fa fa-caret-down"></i> </a>

    <div id="demoAcc6" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $query = "SELECT DISTINCT Ram FROM cellphones";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $list)
            {
                $checked = [];
                if(isset($_GET['ram']))
                {
                    $checked = $_GET['ram'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="ram[]" value="<?= $list['Ram']; ?>"
                            <?php if(in_array($list['Ram'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $list['Ram']; ?>
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
    <a onclick="myAccFunc7()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Brand <i class="fa fa-caret-down"></i></a>

    <div id="demoAcc7" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $brand_query = "SELECT DISTINCT Brand FROM cellphones";
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
   
    <!-- Wireless Tech Checkboxes -->
    <a onclick="myAccFunc4()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Wireless Tech <i class="fa fa-caret-down"></i> </a>

    <div id="demoAcc4" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $query = "SELECT DISTINCT WirelessTech FROM cellphones";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $list)
            {
                $checked = [];
                if(isset($_GET['tech']))
                {
                    $checked = $_GET['tech'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="tech[]" value="<?= $list['WirelessTech']; ?>"
                            <?php if(in_array($list['WirelessTech'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $list['WirelessTech']; ?>
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

    <!-- OS Checkboxes -->
    <a onclick="myAccFunc5()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Operating System <i class="fa fa-caret-down"></i> </a>

    <div id="demoAcc5" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $query = "SELECT DISTINCT OS FROM cellphones";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $list)
            {
                $checked = [];
                if(isset($_GET['os']))
                {
                    $checked = $_GET['os'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="os[]" value="<?= $list['OS']; ?>"
                            <?php if(in_array($list['OS'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $list['OS']; ?>
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
    <a onclick="myAccFunc8()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"> Price <i class="fa fa-caret-down"></i> </a>

    <div id="demoAcc8" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $checked = array("1001", "900", "800", "700", "600", "500", "400", "300", "200", "100");
            foreach($checked as $pricelist)
            {
                ?>
                    <div>
                        <?php
                        if ($pricelist < 1001){
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
    <a href="VideoGames.php" class="w3-bar-item w3-button">Video Game Consoles</a>
    <a href="Photography.php" class="w3-bar-item w3-button">Photography</a>
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
    
    <p class="w3-left">Welcome to the Cell Phone Page</p>
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
                $temp7 = [];
                $temp8 = [];

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

                if(isset($_GET['sizes']))
                {
                    $sizechecked = [];
                    $sizechecked = $_GET['sizes'];
                }
                else
                {
                    $sizechecked[0] = 0;
                }

                if(isset($_GET['storages']))
                {
                    $storagechecked = [];
                    $storagechecked = $_GET['storages'];
                }
                else
                {
                    $storagechecked[0] = 0;
                }

                if(isset($_GET['tech']))
                {
                    $techchecked = [];
                    $techchecked = $_GET['tech'];
                }
                else
                {
                    $techchecked[0] = 0;
                }

                if(isset($_GET['os']))
                {
                    $oschecked = [];
                    $oschecked = $_GET['os'];
                }
                else
                {
                    $oschecked[0] = 0;
                }

                if(isset($_GET['ram']))
                {
                    $ramchecked = [];
                    $ramchecked = $_GET['ram'];
                }
                else
                {
                    $ramchecked[0] = 0;
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
                        $products = "SELECT * FROM cellphones WHERE (Name = '$row') ORDER BY Price DESC;";
                        $products_run = mysqli_query($con, $products);
                    }
                    else
                    {
                        $products = "SELECT * FROM cellphones ORDER BY Price DESC";
                        $products_run = mysqli_query($con, $products);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp1, $prodsize);
                        endforeach;
                    }
                }

                foreach($sizechecked as $row)
                {
                    if($row != 0){
                        $products = "SELECT * FROM cellphones WHERE (ScreenSize = '$row') ORDER BY Price DESC;";
                        $products_run = mysqli_query($con, $products);
                    }
                    else
                    {
                        $products = "SELECT * FROM cellphones ORDER BY Price DESC";
                        $products_run = mysqli_query($con, $products);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp2, $prodsize);
                        endforeach;
                    }
                }

                foreach($storagechecked as $row)
                {
                    if($row != 0){
                        $products = "SELECT * FROM cellphones WHERE (StorageSize = '$row') ORDER BY Price DESC;";
                        $products_run = mysqli_query($con, $products);
                    }
                    else
                    {
                        $products = "SELECT * FROM cellphones ORDER BY Price DESC";
                        $products_run = mysqli_query($con, $products);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp3, $prodsize);
                        endforeach;
                    }
                }

                foreach($techchecked as $row)
                {
                    if($row != 0){
                        $products = "SELECT * FROM cellphones WHERE (WirelessTech = '$row') ORDER BY Price DESC;";
                        $products_run = mysqli_query($con, $products);
                    }
                    else
                    {
                        $products = "SELECT * FROM cellphones ORDER BY Price DESC";
                        $products_run = mysqli_query($con, $products);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp4, $prodsize);
                        endforeach;
                    }
                }

                foreach($oschecked as $row)
                {
                    if($row != 0){
                        $products = "SELECT * FROM cellphones WHERE (OS = '$row') ORDER BY Price DESC;";
                        $products_run = mysqli_query($con, $products);
                    }
                    else
                    {
                        $products = "SELECT * FROM cellphones ORDER BY Price DESC";
                        $products_run = mysqli_query($con, $products);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp5, $prodsize);
                        endforeach;
                    }
                }

                foreach($ramchecked as $row)
                {
                    if($row != 0){
                        $products = "SELECT * FROM cellphones WHERE (Ram = '$row') ORDER BY Price DESC;";
                        $products_run = mysqli_query($con, $products);
                    }
                    else
                    {
                        $products = "SELECT * FROM cellphones ORDER BY Price DESC";
                        $products_run = mysqli_query($con, $products);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp6, $prodsize);
                        endforeach;
                    }
                }

                foreach($brandchecked as $row)
                {
                    if($row != 0){
                        $products = "SELECT * FROM cellphones WHERE (Brand = '$row') ORDER BY Price DESC;";
                        $products_run = mysqli_query($con, $products);
                    }
                    else
                    {
                        $products = "SELECT * FROM cellphones ORDER BY Price DESC";
                        $products_run = mysqli_query($con, $products);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp7, $prodsize);
                        endforeach;
                    }
                }

                foreach($pricechecked as $row)
                {
                    if($row != 0)
                    {
                        if ($row <= 1000)
                        {
                            $products = "SELECT * FROM cellphones WHERE (Price <= '$row') ORDER BY Price DESC;";
                            $products_run = mysqli_query($con, $products);
                        }
                        else 
                        {
                            $products = "SELECT * FROM cellphones WHERE (Price >= '$row') ORDER BY Price DESC;";
                            $products_run = mysqli_query($con, $products);
                        }

                        $extraProducts = "SELECT * FROM cellphones WHERE ((Price <= ('$row' + 100) AND Price > '$row')) ORDER BY Price DESC;";
                        $extraProducts_run = mysqli_query($con, $extraProducts);
                    }
                    else
                    {
                        $extraProducts = "SELECT * FROM cellphones ORDER BY Price DESC;";
                        $extraProducts_run = mysqli_query($con, $extraProducts);
                    }

                    if(mysqli_num_rows($products_run) > 0)
                    {
                        foreach($products_run as $prodsize) :
                            array_push($temp8, $prodsize);
                        endforeach;
                    }

                    if(mysqli_num_rows($extraProducts_run) > 0)
                    {
                        foreach($extraProducts_run as $prodsize) :
                            array_push($similarPrices, $prodsize);
                        endforeach;
                    }
                }



                $result = array_map("unserialize", array_intersect(array_map("serialize", $temp1), array_map("serialize", $temp2), array_map("serialize", $temp3), array_map("serialize", $temp4), array_map("serialize", $temp5), array_map("serialize", $temp6), array_map("serialize", $temp7), array_map("serialize", $temp8)));
                $result2 = array_map("unserialize", array_intersect(array_map("serialize", $temp1), array_map("serialize", $temp2), array_map("serialize", $temp3), array_map("serialize", $temp4), array_map("serialize", $temp5), array_map("serialize", $temp6), array_map("serialize", $temp7), array_map("serialize", $similarPrices)));

                if(!empty($result)){
                    foreach($result as $proditems) :
                            ?>
                                <div class="col-md-4 mt-3">
                                    <div class="border p-2">
                                        <h6><?= $proditems['Brand']; ?></h6>
                                        <h6><?= $proditems['Name']; ?></h6>
                                        <h6><?= "Screen Size: " . $proditems['ScreenSize']; ?></h6>
                                        <h6><?= "Storage Size: " . $proditems['StorageSize']; ?></h6>GB
                                        <h6><?= "RAM: " . $proditems['Ram']; ?></h6>
                                        <h6><?= "Operating System: " . $proditems['OS']; ?></h6>
                                        <h6><?= "Wireless Tech: " . $proditems['WirelessTech']; ?></h6>
                                        <h6><?= "Price: $" . $proditems['Price']; ?></h6>
                                        <h6><a href = 'cellphonecheckout.php?rn=<?=$proditems['id']?>'>Purchase Item</a></h6>
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
                                        <h6><?= "Screen Size: " . $proditems['ScreenSize']; ?></h6>
                                        <h6><?= "Storage Size: " . $proditems['StorageSize']; ?></h6>GB
                                        <h6><?= "RAM: " . $proditems['Ram']; ?></h6>
                                        <h6><?= "Operating System: " . $proditems['OS']; ?></h6>
                                        <h6><?= "Wireless Tech: " . $proditems['WirelessTech']; ?></h6>
                                        <h6><?= "Price: $" . $proditems['Price']; ?></h6>
                                        <h6><a href = 'cellphonecheckout.php?rn=<?=$proditems['id']?>'>Purchase Item</a></h6>
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

  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>About Our Store</h4>
        <p><a href="about.php">About us</a></p>
        <p><a href="privacy.php">Privacy</a></p>
        <p><a href="contract.php">Terms and Conditions</a></p>
        <br>
        <a class="fa fa-facebook-official w3-hover-opacity w3-large" href="https://facebook.com" target="_blank"></a>
        <a class="fa fa-instagram w3-hover-opacity w3-large" href="https://instagram.com" target="_blank"></a>
        <a class="fa fa-snapchat w3-hover-opacity w3-large" href="https://snapchat.com" target="_blank"></a>
        <a class="fa fa-pinterest-p w3-hover-opacity w3-large" href="https://pinterest.com" target="_blank"></a>
        <a class="fa fa-twitter w3-hover-opacity w3-large" href="https://twitter.com" target="_blank"></a>
        <a class="fa fa-linkedin w3-hover-opacity w3-large" href="https://www.linkedin.com" target="_blank"></a>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store Info</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Bone's Electronics</p>
        <p><i class="fa fa-fw fa-phone"></i> (208)666-6969</p>
        <p><i class="fa fa-fw fa-envelope"></i> bonesElectronics@mail.com</p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>We Accept</h4>
        <p><i class="fa fa-fw fa-cc-visa"></i> Visa</p>
        <p><i class="fa fa-fw fa-cc-mastercard"></i> MasterCard</p>
        <p><i class="fa fa-fw fa-cc-discover"></i> Discover</p>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Enjoy your Cell Phone :D</div>

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

function myAccFunc7() {
  var x = document.getElementById("demoAcc7");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc8() {
  var x = document.getElementById("demoAcc8");
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