<!DOCTYPE html>
<html>
	<head>
		<title>Welcome 2 PHP</title>
	</head>
	<body>
		<?php
			$name = $_GET['name'];
			echo 'Welcome to our web site, ' .
			htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '!'; 
		?>
	</body>
</html>