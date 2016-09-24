<html>
	<head>
		<title>FDP-SVNE</title>
	</head>
	<body>
		<?php
			function divide($x, $y) 
			{
				if ($y == 0)
					throw new Exception('Division by zero.');
				else
					return $x / $y;
			}
			try 
			{
				echo divide(5, 2) . "<br>"; // Prints 2.5
				echo divide(4, 0) . "<br>"; // Causes exception to be thrown
			}
			catch (Exception $e) 
			{
				echo 'Caught exception: ', $e->getMessage(), "\n";
				echo 'at Line',$e -> getline(), "\n";
			}

		?>
	</body>
</html>
