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
        $query    = "INSERT into `tv` (ScreenSize, Resolution, Year, Price, Brand)
                     VALUES ('$ScreenSize', '$Resolution', '$Year', '$Price', '$Brand')";
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
        <input type="text" class="login-input" name="ScreenSize" placeholder="ScreenSize" required />
        <input type="text" class="login-input" name="Resolution" placeholder="Resolution">
        <input type="text" class="login-input" name="Year" placeholder="Year">
        <input type="text" class="login-input" name="Price" placeholder="Price">
        <input type="text" class="login-input" name="Brand" placeholder="Brand">
        <input type="submit" name="submit" value="Register" class="login-button">
        
    </form>
<?php
    }
?>
</body>
</html>