<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
</head>
<body>
	<h1>Welcome, 
		<?php 
		if(isset($_SESSION['username']))
			echo $_SESSION['username'];


		 
	?></h1>
 

		<a href="userlist.php">Userlist</a>
 
	
</body>
</html>