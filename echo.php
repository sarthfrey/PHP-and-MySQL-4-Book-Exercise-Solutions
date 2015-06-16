<!DOCTYPE html>
<html>
	<head>
		<title>PHP Test Page</title>
	</head>
	<body>
		<?php 

			echo 'Hello world.';
			echo date('l, F dS Y. ');
			echo 'This is a <strong>test</strong>! ';

			for ($i = 1; $i <= 10; $i++) {
				echo $i . ' ';
			}

		?>
	</body>
</html>