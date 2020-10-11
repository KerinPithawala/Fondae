<?php

include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondae Homepage</title>
    <link rel="stylesheet" href="loginstyle.css"/>
    <script>
       
    function Application(){
    var senderName=document.getElementById("receiver").value;
    var email=document.getElementById("email").value;
    var startDate=document.getElementById("start").value;
    var endDate=document.getElementById("end").value;
    var reason=document.getElementById("reason").value;
    var txt="Respected "+senderName+<br>+"I would like to ask you to give me a leave from "+startDate+" to"+endDate+" because of "+reason+"."+<br>"I request you to grant me a leave."+<br>+"Thank you.";
    var decision = prompt("Should I send this email?", txt);
    if (decision!=NULL){
      window.alert("Email sent");
    }

    }
    </script>
</head>
<body>
    <form class="form" action="" method="post">
    <div class="con">
    <header class="head-con">
        <h1 class="login-title">Leave Application</h1>
    </header>
    <br>
    <br>
    <div class="field-set">

       <h3 style="text-align=center">Hey,<?php echo $_SESSION['username']; ?>!</h3>
      
        Enter receiver's name:
        <span class="input-item">
  <i class="fa fa-user-circle"></i>
  </span>
        <input type="text" class="form-input" id="receiver" required />
        <br>
     
      
        Enter receiver's email:
        <span class="input-item">
        <i class="fa fa-key"></i>
      </span>
        <input type="text" class="form-input" id="email">
        <br>
     
      
      Leave start date from:
      <span class="input-item">
        <i class="fa fa-key"></i>
      </span>
        <input type="date" class="form-input" id="start" >
        <br>
    
        
        Leave end date:  
        <span class="input-item">
        <i class="fa fa-key"></i>
        </span>
        <input type="date" class="form-input" id="end" >
        <br>

        
          Reason for Leave:
          <span class="input-item">
            <i class="fa fa-key"></i>
          </span>
            <input type="text" class="form-input" id="reason" >
            <br>
    
    </div>
    <div class="other">  
        <input type="submit" name="submit" value="Submit" class="login-button" onclick="Application()">
        <br> 
        
    </div>
    </form>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>