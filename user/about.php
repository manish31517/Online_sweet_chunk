<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta neme="viewport" content="width-device-width, initial-scale.0">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="cartbody.css">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script src="jquery.js"></script>
	<script type="text/javascript" src="menustick.js"></script>
	<?php
   session_start();
  if(isset($_SESSION['uname']))
   {
	   ?>
	   <script>
	     $(document).ready(function(){
			// alert();
			$("#sign").css("display","none");
			$("#login").css("display","none");
			$("#logout").css("display","inline");
			$("#welcome").css("display","inline");
		 })
	   </script>
	   <?php
	   function show()
	   {
		   echo "Welcome".$_SESSION['uname'];
	   }
   }
  
?>
</head>
<body style="padding:0;margin-top:-25px;">
				<header id="header">
				<div class="main-top-header">
				<div class="top-header">
				<div id="logo" class="logo">
						<img style="height:100px; width:200px;" src="images/logo_sweet_chunk.png">
					</div>
					<div class="menu">
					<ul>
					<li>
						<span id="sign" style="border-right: 1px solid;"><a href="registation.php" class="login">Sign up</a></span></li> 
					
						<li>   <span id="login" ><a href="login.php" class="login">Login</a></span></li>
						   	 	<li><span id="welcome" style="border-right: 1px solid white; margint-left:-100px;display:none;color:white;" class="login">
							<?php 
							  if(isset($_SESSION['uname']))
							show();
						?></span></li>
						   <li><span id="logout" style="display:none"><a href="logout.php" class="login">Logout</a></span></li>
		</ul>
					</div>
					</div>
					
		</div>
		
<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="index.php" style="border:none;">Home</a></li>
				<li><a href="#" style="border:none;">Category</a>
				<ul>
				<li style="display:block;"><a href="non_egg.php" style="border:none;">Non-egg</a></li>
				<li style="display:block;"><a href="egg.php" style="border:none;">Egg</a></li>
				</ul>
				</li>
				<li ><a href="cart.php" style="border:none;">Cart</a></li>
				<li ><a href="feedback.php" style="border:none;">Feedback</a></li>
				<li class="current"><a href="about.php" style="border:none;" class="active">AboutUs</a></li>
		         <li ><a href="contact.php" style="border:none;">ContactUs</a></li>
			</ul>
			</div>
		</nav>
			<nav id="hiddenmenu" style="z-index:200;">
		<div class="hiddenmenu">
	<div id="logo" class="logo" style="float: left; width: 600px;">
						<img style="height:100px; width:200px;" src="images/logo_sweet_chunk1.png">
					</div>
			<ul>
				<li><a href="index.php" style="border:none;">Home</a></li>
				<li><a href="#" style="border:none;">Category</a></li>
				<li ><a href="cart.php" style="border:none;">Cart</a></li>
				<li ><a href="feedback.php" style="border:none;">Feedback</a></li>
				<li class="current"><a href="about.php" style="border:none;" class="active">AboutUs</a></li>
		         <li ><a href="contact.php" style="border:none;">ContactUs</a></li>
			</ul>
			</div>
		</nav>
		
		</header>
		<!--
		<nav id="hidden-menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Category</a>
                 <ul>
                 	<li><a href="non_egg.php">Non-egg</a></li>
				<li><a href="egg.php">Egg</a></li>
                 </ul>
				</li>
				<li t"><a href="cart.php">Cart</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li class="current"><a href="about.php">AboutUs</a></li>
		         <li><a href="contact.php">ContactUs</a></li>
			</ul>
		</nav>
		</header>
-->

			<div class="team-section" style="margin-top:-60px;">
		<h1>Our Team</h1>
		<span class="border"></span>
		<div class="ps">
			<a href="#p1"><img src="images/manish.jpg" alt=""></a>
			<a href="#p2"><img src="images/anjali.jpg" alt=""></a>
		</div>
		<div class="section" id="p1">
			<span class="name">Manish kumar Tiwari</span>
			<span class="border"></span>
			<p>
            Manish kumar is  living in Varanasi Uttar Pradesh. He has completed his graduation in B.sc(Information Technology) from Mumbai university Mumbai. He is currently pursuing MCA from National Institute of technology Karnataka. He scored AIR 92 in NIMCET (NIT MCA COMMON ENTRANCE TEST) in year 2019. His programing skill is c, c++, php, html.
			</p>
		</div>
		<div class="section" id="p2">
			<span class="name">Anjali Gupta</span>
			<span class="border"></span>
			<p>
			Anjali gupta is living in Madhya Pradesh. She has completed her graduation in BCA from Devi Ahilya University Madhya Pradesh. She is currently pursuing MCA from National Institute of technology Karnataka. She scored AIR 119 in NIMCET (NIT MCA COMMON ENTRANCE TEST) in year 2019. Her programing skill is c, c++, php, html.
			</p>
		</div>
	</div>
		
<?php
include("footer.php");
?>