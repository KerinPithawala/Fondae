<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div id="page">
	<p><a href="logout.php">Logout</a></p>
		<div id="sidebar"> <a href="homepage.php"><img id="logo" src="logo.jpg" width="180" height="240" alt=""></a>
			<h2>BEVERAGE OF THE DAY</h2>
			<ul>
				<li>
					<a href="dessert.php"><img src="green.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Misty Peppermint</a></h3>
				</li>
			</ul>
			<h2>POPULAR BEVERAGES</h2>
			<ul>
				<li>
					<a href="dessert.php"><img src="pink.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Sour Raspberry</a></h3>
				</li>
				<li>
					<a href="dessert.php"><img src="brown.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Caramel Crunch </a></h3>
				</li>
				<li>
					<a href="dessert.php"><img src="purple.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Blueberry Blast</a></h3>
				</li>
			</ul>
		</div>
		<div id="content"> 
			
			<div id="header">
				<ul class="navigation">
					<li>
						<a href="about.php">About Us</a>
					</li>
					
					<li>
						<a href="dessert.php">Famous Recipes</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
			
			<div class="content"> 
				
				<div class="slider">
					<ul>
						<li>
							<img src="cheers1.gif" width="680" height="235">
						</li>
					</ul>

				</div>
				
				<div class="featured">
					<ul>
						<li>
							<a href="flavor2.php"><img src="coffee.png" width="335" height="245" ></a>
							<h2><a href="flavor2.php">COFFEE</a></h2>
						</li>
						<li>
							<a href="flavor1.php"><img src="tea1.jpg" width="340" height="245" ></a>
							<h2><a href="flavor1.php">TEA</a></h2>
						</li>
						<li>
							<a href="flavor3.php"><img src="refreshers2.png" width="680" height="240" ></a>
							<h3><a href="flavor3.php">REFRESHERS</a></h3>
						</li>
					</ul>
				</div>
				
				<div class="section">
					<div class="about">
						<h2><a href="homepage.php">What makes us different?</a></h2>
						<p>
							We have variety of ingredients you can use to customize your drinks.
						</p>
						<p>
							You can even try our some special drinks customized by us for you and our ingredients are fresh and organic.
						</p>
						<p>
							If you're having problems, then don't hesitate to ask for help on the <a href="http://www.frizzle.com/forums">this link</a>.
						</p>
					</div>
					<div class="connect"><a href="homepage.php"><img src="sign-board.gif" width="200" height="200" alt=""></a>
						<h2>NEWSLETTER SIGNUP</h2>
						<span>Get the latest news and updates!</span>
						<form>
							<input type="text" id="email" value="Enter your e-mail here..." onblur="this.value=!this.value?'Enter your e-mail here...':this.value;" onfocus="this.select()" onclick="this.value='';">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				
				<div class="section">
					<h3>Sweet words from our clients:</h3>
					<div class="comment">
						<p>
							<b>SUMAN JAIN:</b> "Frizzle is my favourite spot for having coffee,they have the best coffee in whole mumbai."<br>
							<br><b>NITYA MEHRA:</b> "They have so much variety of ingredients to modify our drinks!"
						</p>
					</div>
				</div>
				
			</div>
			
			<div id="footer">
			<span>&copy;2020 <a href="index.php">Frizzle Coffee and Shakes</a> All Rights Reserved</span>
				<ul>
					<li class="connect">
						FOLLOW US:
					</li>
						<a class="facebook" href="http://www.frizzle.com/go/facebook"><img src="facebook.png" width="30" height="30"></a>
					
						<a class="twitter" href="http://www.frizzle.com/go/twitter/"><img src="twitter.png" width="30" height="30"></a>
					
						<a class="email" href="http://www.frizzle.com/misc/contact"><img src="email.png" width="30" height="30"></a>
					
						<a class="googleplus" href="http://www.frizzle.com/go/googleplus/"><img src="googleplus.png" width="30" height="30"></a>
					
				</ul>
			</div>
		</div>
		
	</div>
</body>
</html>