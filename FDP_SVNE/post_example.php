<html>
<head>
<title>FDP-SVNE</title>
<head>


</head>
	<body>

		<?php
			include 'form.html';

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			require_once 'dbcon.php';
			if (isset($_POST['save'])) 
			{
				$roll = $_POST['roll'];
				$name = $_POST['name'];
				$age = $_POST['age'];
				$gender = $_POST['gender'];
				$SQL =	"INSERT INTO sample(roll,Name, age, gender) VALUES (".$roll.",'".$name."',".$age.",'".$gender."')";
				$result = $conn->query($SQL);
				if($result)
				echo "Record Added Successfully";
				
			}
			else if (isset($_POST['fetch'])) 
			{
				$roll = $_POST['roll'];
				
				$SQL =	"SELECT * FROM sample where roll='".$roll."'";
				$result = $conn->query($SQL);
				if($result->num_rows > 0)
				{
					while ($row = $result->fetch_row())
						echo "$row[0],$row[1],$row[2],$row[3] <br>";
					
					/*
					echo "<table>";
					$header_printed = false;
					while ($row = $result->fetch_assoc())
					{
						if(!$header_printed)
						{
							$header = array_keys($row);
							echo "<thead>";
							foreach($header as $head)
								echo "<th>$head</th>";
							echo "</thead>";
							$header_printed = true;
						}
						echo "<tr>";
						foreach($row as $key => $val)
							echo "<td>$val</td>";
						echo "</tr>";
					}
					echo "</table>";
					*/
				}
				else
				echo "No Records to Display";
				
			}
			else if (isset($_POST['delete'])) 
			{
				$roll = $_POST['roll'];	
				$SQL =	"DELETE FROM sample where roll='".$roll."'";
				$result = $conn->query($SQL);
				#get the no of rows affected from connection object
				#Note: affected rows is defined in connection object but not in resource
				#$result -> affected_rows will not work.
				$n = $conn->affected_rows;
				echo "$n Records Deleted";
				
			}

			
			
			
		}
?>
	</body>
</html>