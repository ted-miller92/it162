<?php include 'includes/portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial scale=1">
		<title><?=$title?></title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/forms.css">
		<!--FontAwesome-->
		<script src="https://use.fontawesome.com/e90390b66f.js"></script>
		<!--Fonts-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">
		<!-- Icon library to show a hamburger menu (bars) on small screens -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Ted Miller's IT162 Portal</h1>
			<div class="topnav" id="myTopnav">
			<?=makeLinks($nav1)?>
			<!--COMMENT OUT NAV
				<a href="index.php" class="active">Home</a>
				<a href="big/index.php">Big</a>
				<a href="aia.php">AIA</a>
				<a href="flowchart.php">Flowchart</a>
				<a href="fp/index.php">Final Project</a>
				<a href="contactme.php">Contact Ted</a>
			END COMMENT OUT NAV-->
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
				</a>
			</div>