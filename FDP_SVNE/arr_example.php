<html>
	<head>
		<title>FDP-SVNE</title>
	</head>
	<body>
		<?php

			$colors = array("red", "green", "blue");
			echo"No of elements in the array :".count($colors)."<br>";
			echo"printing the elements using foreach<br>";
			foreach($colors as $item)
				echo "$item ";
			#deleting the element at postion 2
			unset($colors[1]);
			echo "<br>After deleting the element at position 2<br>";
			print_r($colors);
			#pushing the element
			array_push($colors,"white");
			echo "<br>After pushing the element <br>";
			print_r($colors);
			#sorting colors array
			sort($colors);
			echo "<br>After Sorting <br>";
			print_r($colors);
			#defining a associative array
			$capitals = array(
								"AP" => "Amaravathi",
				 				"TS" => "Hyderabad",
				 
							 );
			#iterating through an associative array using foreach
			foreach($capitals as $state => $city)
				print("<br />$city is the capital of $state.");
			#getting the keys of capitals into states
			echo "<br>";
			$states = array_keys($capitals); 
			print_r($states);
			echo "<br>";
			$cities = array_values($capitals); 
			print_r($cities);
			echo "<br>";
			


		?>
	</body>
</html>
