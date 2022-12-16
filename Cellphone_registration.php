<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
//$id = $_SESSION['id']
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cellphone Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');

    $name = $_SESSION['username'];
   

    $id = "SELECT id FROM vendors WHERE username = '$name'";
    $result = mysqli_query($con, $id);
    $row = $result->fetch_assoc();
    $venderid = $row['id'];

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['Brand'])) {
        // removes backslashes
        $Brand = stripslashes($_REQUEST['Brand']);
        //escapes special characters in a string
        $Brand = mysqli_real_escape_string($con, $Brand);
        $Name    = stripslashes($_REQUEST['Name']);
        $Name    = mysqli_real_escape_string($con, $Name);
        $ScreenSize = stripslashes($_REQUEST['ScreenSize']);
        $ScreenSize = mysqli_real_escape_string($con, $ScreenSize);
        $Price = stripslashes($_REQUEST['Price']);
        $Price = mysqli_real_escape_string($con, $Price);
        $WirelessTech = stripslashes($_REQUEST['WirelessTech']);
        $WirelessTech = mysqli_real_escape_string($con, $WirelessTech);
        $Ram = stripslashes($_REQUEST['Ram']);
        $Ram = mysqli_real_escape_string($con, $Ram);
        $StorageSize = stripslashes($_REQUEST['StorageSize']);
        $StorageSize = mysqli_real_escape_string($con, $StorageSize);
        $OS = stripslashes($_REQUEST['OS']);
        $OS = mysqli_real_escape_string($con, $OS);
        $vid = stripslashes($venderid);
        $vid = mysqli_real_escape_string($con, $vid);
        $query    = "INSERT into `cellphones` (Brand, Name, ScreenSize, Price, WirelessTech, Ram, StorageSize, OS, vid)
                     VALUES ('$Brand', '$Name', '$ScreenSize', '$Price', '$WirelessTech', '$Ram', '$StorageSize', '$OS', '$vid')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Cellphone registered successfully.</h3><br/>
                  <p class='link'>Click here to go back to dashboard <a href='vendordashboard.php'>Here</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Cellphone_registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Cellphone Registration</h1>
        <input type="text" class="login-input" name="Brand" placeholder="Brand" required />
        <input type="text" class="login-input" name="Name" placeholder="Name" required >
        <input type="text" class="login-input" name="ScreenSize" placeholder="Screen Size" required >
        <input type="text" class="login-input" name="WirelessTech" placeholder="Wireless Tech" required >
        <input type="text" class="login-input" name="Ram" placeholder="RAM" required >
        <input type="text" class="login-input" name="StorageSize" placeholder="Storage Size" required >
        <input type="text" class="login-input" name="OS" placeholder="Operating System" required >
        <input type="text" class="login-input" name="Price" placeholder="Price" required >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="vendordashboard.php">Go Back</a></p>
    </form>
<?php
    }
?>
</body>
</html>