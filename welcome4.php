<!DOCTYPE html>
<html>
<head>
	<title>Welcome 3</title>
</head>
<body>
	<?php
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		echo 'Welcome to our web site, ' .
		$firstname . ' ' .
		$lastname . '!';
	?>
</body>
</html>
