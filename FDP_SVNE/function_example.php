<html>
	<head>
		<title>FDP-SVNE</title>
	</head>
	<body>
		<?php
			#defining a function with defaultvalues for a parameter

			function say_greeting($name, $greeting="Hello") 
			{
				print "$greeting, $name!<br>";
				
			}
			#calling the function without second argument
			say_greeting("Susan"); // Hello, Susan!
			say_greeting("Rita", "Hola"); // Hola, Rita!
			say_greeting("SVNE","Good Morning");
		?>
	</body>
</html>
