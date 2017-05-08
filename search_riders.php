<?php
	declare(strict_types=1);
	
	$page = "";
	if (isset($_POST['submit'])) {
		$page .= "submitted";
	} else {
		$page .= <<<PAGE
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>UPool</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="search.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="search_rider.js"></script>
	</head>
	
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="main.html">UPool</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="search_riders.php">Riders</a></li>
						<li><a href="search.html">Drivers</a></li>
					</ul>
					
					<div class="dropdown navbar-right">
						<button class="dropbtn">Profile &#9660;</button>
						<div class="dropdown-content">
						  <a href="#">My UPOOL</a>
						  <a href="#">Settings</a>
						  <a href="#">Log out</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
			<div class="sidebar">
				<br />
				&nbsp;&nbsp;<input type="search" id="start" placeholder="Choose starting location...">
				<div class="error" id="starterror">&nbsp;</div>
				&nbsp;&nbsp;<input type="search" id="destination" placeholder="Choose destination...">
				<div class="error" id="destinationerror">&nbsp;</div>
				<form action="{$_SERVER['PHP_SELF']}" method="post">
					&nbsp;&nbsp;Date:&nbsp;<input type="date" id="date" min="2017-5-1">&nbsp;&nbsp;
					&nbsp;&nbsp;<input type="checkbox" id="repeat" value="repeat">&nbsp;&nbsp;Repeat Weekly?
					<div class="error" id="dateerror">&nbsp;</div>
					&nbsp;&nbsp;Start Time:&nbsp;<input type="time" id="starttime" step="300">
					&nbsp;&nbsp;Arrival Time:&nbsp;<input type="time" id="arrivaltime" step="300"><br />
					<div class="error" id="timeerror">&nbsp;</div>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<input name="submit" type="submit" onclick="processData();" value="Join Carpool"/>
					
					<div id="carpools"></div>
				</form>
			</div>
	
			<div class="body">
				<div id="map"></div>
			</div>
		
		<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGf2V7XQSqJgEyp4oinoyA3dCyzb-CHn4&callback=initMap">
		</script>
	</body>
</html>
PAGE;
	}
	
	echo $page;
?>