<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="loginstyle.css"/>
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
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, pass, email, create_datetime)
                     VALUES ('$username', '" . ($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
    <div class="con">
    <header class="head-con">
        <h1 class="login-title">Registration</h1>
    </header>
    <br>
    <br>
    <div class="field-set">

      <span class="input-item">
	<i class="fa fa-user-circle"></i>
      </span>
        <input type="text" class="form-input" name="username" placeholder="Username" required />
        <br>
     
      <span class="input-item">
        <i class="fa fa-key"></i>
      </span>
        <input type="text" class="form-input" name="email" placeholder="Email Adress">
        <br>
     
      <span class="input-item">
        <i class="fa fa-key"></i>
      </span>
        <input type="password" class="form-input" name="password" placeholder="Password">
        <br>
     
      <span class="input-item">
        <i class="fa fa-key"></i>
      </span>
    
    </div>
    <div class="other">  
        <input type="submit" name="submit" value="Register" class="login-button">
        <br> 
        <p class="link"><a href="index.php">Click to Login</a></p>
        <i class="fa fa-user-plus" aria-hidden="true"></i>
    </div>
    </form>
    
<?php
    }
?>
</body>
</html>