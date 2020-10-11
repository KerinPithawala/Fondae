<html>
<head>
	<link rel="stylesheet" type="text/css" href="loginstyle.css"> </link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script src="loginjs.js"></script>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `empinfo` WHERE username='$username'
                     AND pass='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: homepage.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="overlay">
<form class="form" method="post" name="login">
   <div class="con">
   <header class="head-form">
      <h2>Log In</h2>
      <p>Enter your username and password</p>
   </header>
   <br>
   <div class="field-set">

      <span class="input-item">
	<i class="fa fa-user-circle"></i>
      </span>
        <input class="form-input" id="txt-input" type="text" name="username" placeholder="@UserName" required autofocus="true"/>
     	<br>
     
      <span class="input-item">
        <i class="fa fa-key"></i>
      </span>
      <input type="password" class="form-input" name="password" id="pwd" placeholder="Password"/>
      </span>


     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
   
      <br>
     <button type="submit" class="log-in"> Log In </button>
   </div>

   <div class="other">
      <button class="btn submits frgt-pass">Forgot Password</button>
      <p class="link"><a href="registration.php">New Registration</a></p>
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
   </div>
</div>
</form>
<?php
    }
?>
</div>
</body>
</html>