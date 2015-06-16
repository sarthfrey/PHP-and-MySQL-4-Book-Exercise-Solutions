<!DOCTYPE html>
<html>
	<head>
		<title>Welcome 1 PHP</title>
	</head>
	<body>
		<?php

			$name = $_GET['name'];
			echo 'Welcome to our web site, ' . $name . '!';

		?>
	</body>
</html>