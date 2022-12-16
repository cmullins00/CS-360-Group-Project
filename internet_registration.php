<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
//$id = $_SESSION['id']
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Internet Service Registration</title>
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
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $bandwidth    = stripslashes($_REQUEST['bandwidth']);
        $bandwidth    = mysqli_real_escape_string($con, $bandwidth);
        $price = stripslashes($_REQUEST['price']);
        $price = mysqli_real_escape_string($con, $price);
        $vid = stripslashes($venderid);
        $vid = mysqli_real_escape_string($con, $vid);
        $query    = "INSERT into `internet` (name, bandwidth, price, vid)
                     VALUES ('$name', '$bandwidth', '$price', '$vid')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Internet service registered successfully.</h3><br/>
                  <p class='link'>Click here to go back to dashboard <a href='vendordashboard.php'>Here</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='internet_registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Internet Service Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Service Name" required />
        <input type="text" class="login-input" name="bandwidth" placeholder="Bandwidth" required >
        <input type="text" class="login-input" name="price" placeholder="Price" required >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="vendordashboard.php">Go Back</a></p>
    </form>
<?php
    }
?>
</body>
</html>