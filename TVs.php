<!DOCTYPE html>
<html lang="en">
<head>
    <title>TV's</title>
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
    <input type="submit" class="w3-bar-item w3-button" onclick="submitForms()" id="sub"/>
    <!-- <input type="submit" class="w3-bar-item w3-button" onclick="submitForms()"/> -->

    <!-- <a href="#" class="w3-bar-item w3-button">Update Search</a> -->

    <!-- form.demoAcc.onclick = function1(){ $('#form1 #form2 #form3').submit(); }); -->

    <!-- <a onclick="function(){ $('#box1').submit(); });" class="w3-bar-item w3-button">Update Search</a> -->


    <a href="TVs.php" class="w3-bar-item w3-button">Reset Search</a>
    
    <form action="" method="GET" id="box1">

    <!-- TV Screen Checkboxes -->
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      TV Screen Size <i class="fa fa-caret-down"></i>
    </a>

    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $size_query = "SELECT DISTINCT ScreenSize FROM tv";
        $size_query_run = mysqli_query($con, $size_query);

        if (mysqli_num_rows($size_query_run) > 0)
        {
            foreach($size_query_run as $sizelist)
            {
                $checked = [];
                if(isset($_GET['sizes']))
                {
                    $checked = $_GET['sizes'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="sizes[]" id="1" value="<?= $sizelist['ScreenSize']; ?>"
                            <?php if(in_array($sizelist['ScreenSize'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $sizelist['ScreenSize']; ?> inches
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
    
    <!-- Resolution Checkboxes -->
    <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Resolution <i class="fa fa-caret-down"></i>
    </a>

    <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $res_query = "SELECT DISTINCT Resolution FROM tv";
        $res_query_run = mysqli_query($con, $res_query);

        if (mysqli_num_rows($res_query_run) > 0)
        {
            foreach($res_query_run as $reslist)
            {
                $checked = [];
                if(isset($_GET['ress']))
                {
                    $checked = $_GET['ress'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="ress[]" value="<?= $reslist['Resolution']; ?>"
                            <?php if(in_array($reslist['Resolution'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $reslist['Resolution']; ?>
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
    
    <!-- Model Year Checkboxes -->
    <a onclick="myAccFunc3()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Model Year <i class="fa fa-caret-down"></i>
    </a>

    <div id="demoAcc3" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $year_query = "SELECT DISTINCT Year FROM tv";
        $year_query_run = mysqli_query($con, $year_query);

        if (mysqli_num_rows($year_query_run) > 0)
        {
            foreach($year_query_run as $yearlist)
            {
                $checked = [];
                if(isset($_GET['years']))
                {
                    $checked = $_GET['years'];
                }
                ?>
                    <div>
                        <input type="checkbox" name="years[]" value="<?= $yearlist['Year']; ?>"
                            <?php if(in_array($yearlist['Year'], $checked)){ echo "checked"; } ?>
                        />
                        <?= $yearlist['Year']; ?>
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
    <a onclick="myAccFunc4()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Price <i class="fa fa-caret-down"></i>
    </a>

    <div id="demoAcc4" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $price_query = "SELECT DISTINCT Price FROM tv";
        $price_query_run = mysqli_query($con, $price_query);

        if (mysqli_num_rows($price_query_run) > 0)
        {
            foreach($price_query_run as $pricelist)
            {
                $checked = [];
                if(isset($_GET['prices']))
                {
                    $checked = $_GET['prices'];
                }
                ?>
                    <div>
                        
                        <input type="checkbox" name="prices[]" value="<?= $pricelist['Price']; ?>"
                            <?php if(in_array($pricelist['Price'], $checked)){ echo "checked"; } ?>
                        />
                        $<?= $pricelist['Price'] . " or less"; ?>
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
    <?php
    /*
    <a onclick="myAccFunc5()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Brand <i class="fa fa-caret-down"></i>
    </a>

    <div id="demoAcc5" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $brand_query = "SELECT DISTINCT Brand FROM tv";
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
    */
    ?>

    <?php /*
    <!-- Brands Checkboxes -->
    <a onclick="myAccFunc5()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      TV Brands <i class="fa fa-caret-down"></i>
    </a>

    <div id="demoAcc5" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <?php
        require('db.php');

        $brand_query = "SELECT DISTINCT Brand FROM tv";
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
    */ ?>
    </form>
    
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

  <div class = "col-md-9 mt-3">
    <div class="card mt-3">
        <div class="card-body row">
            <?php
                require('db.php');

                $result = [];

                if(isset($_GET['sizes']))
                {
                    if(isset($_GET['sizes']))
                    {
                        $sizechecked = [];
                        $sizechecked = $_GET['sizes'];
                    }
                }
                else
                {
                    $sizechecked[0] = 0;
                }

                if(isset($_GET['ress']))
                {
                    if(isset($_GET['ress']))
                    {
                        $reschecked = [];
                        $reschecked = $_GET['ress'];
                    }
                }
                else
                {
                    $reschecked[0] = 0;
                }

                if(isset($_GET['years']))
                {
                    if(isset($_GET['years']))
                    {
                        $yearchecked = [];
                        $yearchecked = $_GET['years'];
                    }
                }
                else
                {
                    $yearchecked[0] = 0;
                }

                if(isset($_GET['prices']))
                {
                    if(isset($_GET['prices']))
                    {
                        $pricechecked = [];
                        $pricechecked = $_GET['prices'];
                    }
                }
                else
                {
                    $pricechecked[0] = 0;
                }

                /*
                if(isset($_GET['brands']))
                {
                    if(isset($_GET['brands']))
                    {
                        $brandchecked = [];
                        $brandchecked = $_GET['brands'];
                        ?>
                        <h6>found a brand name <?php $brandchecked[0]; ?></h6>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <h6>this shit broken</h6>
                    <?php
                    $brandchecked[0] = 0;
                }
                */

                foreach($sizechecked as $rowsize)
                {
                    foreach($reschecked as $rowres)
                    {
                        foreach($yearchecked as $rowyear)
                        {
                            foreach($pricechecked as $rowprice)
                            {                             
                                    $products = "SELECT * FROM tv WHERE (ScreenSize = '$rowsize' or '$rowsize' = 0) AND (Resolution = '$rowres' or '$rowres' = 0) AND (Year = '$rowyear' or '$rowyear' = 0) AND (Price <= '$rowprice' or '$rowprice' = 0);";
                                    $products_run = mysqli_query($con, $products);

                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $prodsize) :
                                            array_push($result, $prodsize);
                                        endforeach;
                                    }
                                
                            }
                        }
                    }
                }

                if(!empty($result)){
                    $result = array_map("unserialize", array_unique(array_map("serialize", $result)));

                    foreach($result as $proditems) :
                            ?>
                                <div class="col-md-4 mt-3">
                                    <div class="border p-2">
                                        <h6><?= $proditems['Brand']; ?></h6>
                                        <h6><?= "Size: " . $proditems['ScreenSize'] . " inch" ?></h6>
                                        <h6><?= "Resolution: " . $proditems['Resolution'] ?></h6>
                                        <h6><?= $proditems['Year']; ?></h6>
                                        <h6><?= "Price: $" . $proditems['Price']; ?></h6>
                                        <h6><a href = 'checkout.php?rn=<?=$proditems['id']?>'>Purchase Item</a></h6>
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
                
                

                /*
                $products = "SELECT * FROM tv";
                $products_run = mysqli_query($con, $products);
                if(mysqli_num_rows($products_run) > 0)
                {
                    foreach($products_run as $proditems) :
                        ?>
                            <div class="col-md-4 mt-3">
                                <div class="border p-2">
                                    <h6><?= $proditems['ScreenSize'] . " " . $proditems['Resolution'] . " " . $proditems['Year'] . " " . $proditems['Price'] . " " . $proditems['Brand']; ?></h6>
                                </div>
                            </div>
                        <?php
                    endforeach;
                }
                */
            ?>
        </div>
    </div>
  </div>

  <div class="w3-black w3-center w3-bottom w3-padding-24">Enjoy your TV :D<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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