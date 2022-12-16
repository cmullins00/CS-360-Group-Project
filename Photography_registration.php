<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
//$id = $_SESSION['id']
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Camera Registration</title>
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
        $Megapixels = stripslashes($_REQUEST['Megapixels']);
        $Megapixels = mysqli_real_escape_string($con, $Megapixels);
        $Price = stripslashes($_REQUEST['Price']);
        $Price = mysqli_real_escape_string($con, $Price);
        $MaxAperture = stripslashes($_REQUEST['MaxAperture']);
        $MaxAperture = mysqli_real_escape_string($con, $MaxAperture);
        $VideoResolution = stripslashes($_REQUEST['VideoResolution']);
        $VideoResolution = mysqli_real_escape_string($con, $VideoResolution);
        $vid = stripslashes($venderid);
        $vid = mysqli_real_escape_string($con, $vid);
        $query    = "INSERT into `cameras` (Brand, Name, Megapixels, Price, MaxAperture, VideoResolution, vid)
                     VALUES ('$Brand', '$Name', '$Megapixels', '$Price', '$MaxAperture', '$VideoResolution', '$vid')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Camera registered successfully.</h3><br/>
                  <p class='link'>Click here to go back to dashboard <a href='vendordashboard.php'>Here</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Photography_registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Camera Registration</h1>
        <input type="text" class="login-input" name="Brand" placeholder="Brand" required />
        <input type="text" class="login-input" name="Name" placeholder="Name" required >
        <input type="text" class="login-input" name="Megapixels" placeholder="Megapixels" required >
        <input type="text" class="login-input" name="MaxAperture" placeholder="Max Aperture" required >
        <input type="text" class="login-input" name="VideoResolution" placeholder="Video Resolution" required >
        <input type="text" class="login-input" name="Price" placeholder="Price" required >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="vendordashboard.php">Go Back</a></p>
    </form>
<?php
    }
?>
</body>
</html>