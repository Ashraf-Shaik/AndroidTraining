<html>
	<head>
		<title>FDP-SVNE</title>
	</head>
	<body>
		<?php
			$x = "test";
			function display() 
			{
				global $x;
				//generates an error Undefined variable without above statement
				$y = 10;
				echo $x;
			}
			Display();
			//cannot access $y here
			//echo $y;

		?>
	</body>
</html>
