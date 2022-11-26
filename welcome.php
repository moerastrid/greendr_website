<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {
  box-sizing: border-box;
        }
   body {
        font-family: Arial, Helvetica, sans-sarif;
        }
 .welcome {
        flex: 100%;
        padding: 20px;
        text-align: center;
        background: LightYellow;
        color: SeaGreen;
	}

  </style>
 </head>
<body>

	<?php
		include("header.php");
		include("navbar.php");
	?>
 <div class="welcome">
	<h2>Welcome <?php echo $_POST["name"]; ?><br></h2>
	<p>
	 <?php
		$servername = "localhost";
		$username = "root";
		$password = "empower";
		$dbname = "GreendrDB";
		$found = false;
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else
		{
			echo "Connected successfully!<br><br>";
		}
		echo "Your user account details are:<br>";
		$sql = "SELECT `userID`, `name`, `password`, `email`, `Description`, `Favorite`, `Profile picture` FROM users";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if (strcmp($row["name"], $_POST["name"]) == 0) {
	 				echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
					echo "Description: " . $row["Description"] . "<br>";
					if ($row["Favorite"] == 1){
						echo "You also love tomatoes. <br>";
					} else {
						echo "Why do you hate tomatoes? <br>";
					}
					$found = true;
					break ;
  				}
			}
			if ($found == false)
			{	echo $_POST["name"] . " not found :( <br>";111
			} else {
				
			}
		} else {
		  echo "0 results";
		}
		$conn->close();
	 ?>
	</p>
 </div>
	<?php
		include ("footer.php");
	?>
</body>
</html>

