<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vendor Registration</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $company_name = stripslashes($_REQUEST['company_name']);
        $company_name = mysqli_real_escape_string($con, $company_name);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `vendors` (username, password, email, company_name, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$company_name', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='vendorlogin.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='vendorregistration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Vendor Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress" />
        <input type="password" class="login-input" name="password" placeholder="Password" />
        <input type="text" class="login-input" name="company_name" placeholder="Company Name" />
        <input type="submit" name="submit" value="Register" class="login-button" />
        <p class="link">
            <a href="vendorlogin.php">Click to Login</a>
        </p>
    </form>
    <?php
    }
    ?>
</body>
</html>