<?php
	include 'classes/common.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			My Profile
		</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		
			.bg-dark
			{
				background-color: #343a40!important;
			}
			.card 
			{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				max-width: 325px;
				margin: auto;
				text-align: center;
				font-family: arial;
				background-color: white;
			}

			.title 
			{
				color: grey;
				font-size: 18px;
			}


			button 
			{
				border: none;
				outline: 0;
				display: inline-block;
				padding: 8px;
				color: white;
				background-color: #000;
				text-align: center;
				cursor: pointer;
				width: 100%;
				font-size: 18px;
			}

			a
			{
				text-decoration: none;
				font-size: 22px;
				color: black;
			}

			button:hover, a:hover 
			{
				opacity: 0.7;
			}
		</style>
	</head>
	<body class="bg-dark">

		<h2 style="text-align:center;color:white">User Profile</h2>

		<div class="card">
			<img src="images/admin.png" alt="John" style="width:100%">
			<h1>Krishna Adhia</h1>
			<p class="title">CEO & Founder</p>
			<p>Harvard University</p>
			<div style="margin: 24px 0;">
				<a href="#"><i class="fa fa-dribbble"></i></a> 
				<a href="#"><i class="fa fa-twitter"></i></a>  
				<a href="#"><i class="fa fa-linkedin"></i></a>  
				<a href="#"><i class="fa fa-facebook"></i></a> 
			</div>
			<p><button>Contact</button></p>
		</div>
	</body>
</html>
