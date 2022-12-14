<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
//$id = $_SESSION['id']
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Computer Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');

    $name = $_SESSION['username'];
   

    $id = "SELECT id FROM vendors WHERE username = '$name'";
    $result = mysqli_query($con, $id);
    $row = $result->fetch_assoc();
    echo "ID " . $row['id'];
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
        $Resolution = stripslashes($_REQUEST['Resolution']);
        $Resolution = mysqli_real_escape_string($con, $Resolution);
        $Ram = stripslashes($_REQUEST['Ram']);
        $Ram = mysqli_real_escape_string($con, $Ram);
        $StorageType = stripslashes($_REQUEST['StorageType']);
        $StorageType = mysqli_real_escape_string($con, $StorageType);
        $StorageSize = stripslashes($_REQUEST['StorageSize']);
        $StorageSize = mysqli_real_escape_string($con, $StorageSize);
        $OS = stripslashes($_REQUEST['OS']);
        $OS = mysqli_real_escape_string($con, $OS);
        $vid = stripslashes($venderid);
        $vid = mysqli_real_escape_string($con, $vid);
        $query    = "INSERT into `computers` (Brand, Name, ScreenSize, Price, Resolution, Ram, StorageType, StorageSize, OS, vid)
                     VALUES ('$Brand', '$Name', '$ScreenSize', '$Price', '$Resolution', '$Ram', '$StorageType', '$StorageSize', '$OS', '$vid')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Computer registered successfully.</h3><br/>
                  <p class='link'>Click here to go back to dashboard <a href='vendordashboard.php'>Here</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Computer_registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Computer Registration</h1>
        <input type="text" class="login-input" name="Brand" placeholder="Brand" required />
        <input type="text" class="login-input" name="Name" placeholder="Name" required >
        <input type="text" class="login-input" name="ScreenSize" placeholder="ScreenSize" required >
        <input type="text" class="login-input" name="Resolution" placeholder="Resolution" required >
        <input type="text" class="login-input" name="Ram" placeholder="Ram" required >
        <input type="text" class="login-input" name="StorageType" placeholder="StorageType" required >
        <input type="text" class="login-input" name="StorageSize" placeholder="StorageSize" required >
        <input type="text" class="login-input" name="OS" placeholder="OS" required >
        <input type="text" class="login-input" name="Price" placeholder="Price" required >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="vendordashboard.php">Go Back</a></p>
    </form>
<?php
    }
?>
</body>
</html>