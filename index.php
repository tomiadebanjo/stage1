<!DOCTYPE html>
<html>
<head>
	<title>HNG INTERNSHIP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Gugi|Raleway" rel="stylesheet">
</head>
<body>
	<div id="top-rectangle">
		<h1>MY DESIGN</h1>
	</div>

	<div id="middle-rectangle" style="color:#fff;"><p>Welcome to HNG Internship</p></div>


	<div id="bottom-rectangle" style="color:#fff;">
		<h1>TIME:
			<?php 
				date_default_timezone_set("Africa/lagos");
				echo date("h:i:sa"); 
		?> </h1>
	</div>
</body>
</html>
