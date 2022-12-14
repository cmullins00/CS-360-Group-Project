<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
//$id = $_SESSION['id']
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>TV Registration</title>
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
    if (isset($_REQUEST['ScreenSize'])) {
        // removes backslashes
        $ScreenSize = stripslashes($_REQUEST['ScreenSize']);
        //escapes special characters in a string
        $ScreenSize = mysqli_real_escape_string($con, $ScreenSize);
        $Resolution    = stripslashes($_REQUEST['Resolution']);
        $Resolution    = mysqli_real_escape_string($con, $Resolution);
        $Year = stripslashes($_REQUEST['Year']);
        $Year = mysqli_real_escape_string($con, $Year);
        $Price = stripslashes($_REQUEST['Price']);
        $Price = mysqli_real_escape_string($con, $Price);
        $Brand = stripslashes($_REQUEST['Brand']);
        $Brand = mysqli_real_escape_string($con, $Brand);
        $vid = stripslashes($venderid);
        $vid = mysqli_real_escape_string($con, $vid);
        $query    = "INSERT into `tv` (ScreenSize, Resolution, Year, Price, Brand, vid)
                     VALUES ('$ScreenSize', '$Resolution', '$Year', '$Price', '$Brand', '$vid')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>TV registered successfully.</h3><br/>
                  <p class='link'>Click here to go back to dashboard <a href='vendordashboard.php'>Here</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='TV_registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">TV Registration</h1>
        <input type="text" class="login-input" name="ScreenSize" placeholder="Screen Size" required />
        <input type="text" class="login-input" name="Resolution" placeholder="Resolution" required >
        <input type="text" class="login-input" name="Year" placeholder="Year" required >
        <input type="text" class="login-input" name="Price" placeholder="Price" required >
        <input type="text" class="login-input" name="Brand" placeholder="Brand" required >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="vendordashboard.php">Go Back</a></p>
    </form>
<?php
    }
?>
</body>
</html>