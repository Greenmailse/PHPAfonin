<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<link href="/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="/template/js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="/template/js/simpleCart.min.js"> </script>
<link href="/template/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/template/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--dropdown-->
<script src="/template/js/jquery.easydropdown.js"></script>
</head>
<body>
	<!--top-header-->
	<div class="top-header">
		<div class="container">

			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">

						<div class="box">
							<select tabindex="4" class="dropdown drop">
								<option value="" class="label">Dollar :</option>
								<option value="1">Dollar</option>
								<option value="2">Euro</option>
							</select>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="byuers.php">
							 <div class="total">
					<span class="simpleCart_total">322$	</span></div>

								<img src="/template/images/cart-1.png" alt="" />
						</a>
						<div class="clearfix"> </div>
						<div>
							<?php
							if (empty($_SESSION['name']) or empty($_SESSION['id']))
							{
								echo '<h5>Вы зашли как гость</h5>';
							}
							else {
								include ("DB.php");
								echo '<h5>Вы зашли как '.$_SESSION['name'].'</h5>';

							}
							 ?>

							 <style>
							 	h5{
									color:#999999;
								}
							 </style>
						</div>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="index.html"><h1>Luxury Watches</h1></a>
	</div>
