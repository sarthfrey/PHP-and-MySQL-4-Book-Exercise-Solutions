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
		htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
		htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
	?>
</body>
</html>
