<html>
	<head>
		<title>FDP-SVNE</title>
	</head>
	<body>
		<?php
			$name = array(	"first_name" => "Ashraf",
							"middle_name" => "Ali",
							"last_name"	=> "Shaik"
						);

			$details = array(	"qualification" => "M.Tech",
							"age" => "33",
							"gender"	=> "male"
						);
			#union of two arrays
			#union operation is performed depending on keys not values
			$full_details = $name + $details;
			//var_dump($full_details);
			echo"<br><br>";
			print_r($full_details);

			$x = array(1,2,3);
			$y = array(1,"2",3);
			if($x === $y)
				echo "<br>".'$x'." and ".'$y'." are same<br>";
			else
				echo "<br>".'$x'." and ".'$y'." are different<br>";
			
			
			/*
			$z = $x + $y;
			print_r($x);
			echo "<br>";
			print_r($y);
			echo "<br>";
			print_r($z); */


		?>
	</body>
</html>
