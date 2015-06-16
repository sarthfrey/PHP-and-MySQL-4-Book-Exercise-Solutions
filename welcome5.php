<!DOCTYPE html>
<html>
<head>
	<title>Welcome 3</title>
</head>
<body>
	<?php
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		echo 'Welcome to our web site, ' .
		htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
		htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
	?>
</body>
</html>
